<?php
class my_oxutilscount extends my_oxutilscount_parent {
  /**
   * Returns category article count, WITHOUT using file cache
   *
   * @param string $sCatId Category Id
   *
   * @return int
   */
  public function getCatArticleCount( $sCatId )
  {
      // current status unique ident
      $sActIdent = $this->_getUserViewId();

      // loading from cache
      // $aCatData = $this->_getCatCache();

      if ( !$aCatData || !isset( $aCatData[$sCatId][$sActIdent] ) ) {
          $iCnt = $this->setCatArticleCount( $aCatData, $sCatId, $sActIdent );
      } else {
          $iCnt = $aCatData[$sCatId][$sActIdent];
      }
      return $iCnt;
  }
}
