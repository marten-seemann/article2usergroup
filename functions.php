<?php
/**
 * Return the view name of the given table if a view exists, otherwise the table name itself
 *
 * handles the special privileges: if the user is allowed to view the products (i.e. he is in the special rights group), it return oxv_oxarticles_lang, otherwise oxv_oxarticles_lang_sr0
 *
 * @param string $sTable  table name
 * @param int    $iLangId language id [optional]
 * @param string $sShopId shop id, otherwise config->myshopid is used [optional]
 *
 * @return string
 */

function getViewName($sTable, $iLangId = null, $sShopId = null) {
    $myConfig = oxRegistry::getConfig();
    $privileged_group_oxid = $myConfig->getConfigParam("privilege_usergroup_oxid");

    $sTableRequested = $sTable;
    if ( !$myConfig->getConfigParam( 'blSkipViewUsage' ) ) {
        $sViewSfx = '';
        $sViewPfx = 'oxv_';
        $sRightSfx = '';


        $blIsMultiLang = in_array($sTable, oxRegistry::getLang()->getMultiLangTables());
        if($iLangId != -1 && $blIsMultiLang) {
            $oLang = oxRegistry::getLang();
            $iLangId = $iLangId !== null ? $iLangId : oxRegistry::getLang()->getBaseLanguage();
            $sAbbr = $oLang->getLanguageAbbr($iLangId);
            $sViewSfx .= "_{$sAbbr}";
        }

        if($sTableRequested == "oxarticles") {
            $privileged_user = false;
            $oUser = oxRegistry::getUtils()->getUser();

            if($oUser) {
                if(!($oUser->isAdmin() OR $oUser->oxuser__oxrights->value == "malladmin")) {
                    $aGroups = $oUser->getUserGroups();
                    $priviledged_user = false;
                    foreach($aGroups as $oGroup) {
                        if($oGroup->getId() == $privileged_group_oxid) $priviledged_user = true;
                    }
                }
                else { // always show all articles to admin users
                    $priviledged_user = true;
                }
            }
            if(!$priviledged_user) {
                $sViewPfx = "msv_";
                $sRightSfx = "_sr0";
            }
        }

        if ($sViewSfx || (($iLangId == -1 || $sShopId == -1 ) && $blIsMultiLang)) {
            return "{$sViewPfx}{$sTable}{$sRightSfx}{$sViewSfx}";
        }

    }

    return $sTable;
}
