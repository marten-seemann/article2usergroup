<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

$aModule = array(
    'id'           => 'article2usergroup',
    'title'        => 'Article2Usergroup',
    'description'  => array(
        'de' => 'Artikel nur für spezielle Benutzergruppen anzeigen',
        'en' => 'show articles only for special user groups'
        ),
    'thumbnail'    => '',
    'version'      => '2.1',
    'author'       => 'Marten Seemann',
    'url'          => 'http://shop.oxid-responsive.com/',
    'blocks'       => array(
        array("template" => "article_main.tpl", "block" => "admin_article_main_form", "file" => "admin_article_main.tpl"),
        array("template" => "usergroup_main.tpl", "block" => "admin_usergroup_main_form", "file" => "admin_usergroup_main.tpl"),
        array("template" => "usergroup_list.tpl", "block" => "admin_usergroup_list_filter", "file" => "admin_usergroup_list_filter.tpl"),
        array("template" => "usergroup_list.tpl", "block" => "admin_usergroup_list_colgroup", "file" => "admin_usergroup_list_colgroup.tpl"),
        array("template" => "usergroup_list.tpl", "block" => "admin_usergroup_list_sorting", "file" => "admin_usergroup_list_sorting.tpl"),
        array("template" => "usergroup_list.tpl", "block" => "admin_usergroup_list_item", "file" => "admin_usergroup_list_item.tpl"),
        ),
    'extend' => array(
        'oxutilscount' => 'article2usergroup/core/my_oxutilscount',
        ),
    'files' => array(
        'article2usergroup_events' => 'article2usergroup/core/article2usergroup_events.php',
        ),
    'settings'     => array(
        array('group' => 'main', 'name' => 'privilege_usergroup_oxid', 'type' => 'str', 'value' => '', 'position' => 0),
        ),
    'templates' => array(
        ),
    'events' => array(
        'onActivate'   => 'article2usergroup_events::onActivate',
        'onDeactivate' => 'article2usergroup_events::onDeactivate'
        )
);
