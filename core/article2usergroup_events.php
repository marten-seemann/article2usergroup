<?php
class article2usergroup_events {
  // execute all SQL commands in ../sql/views.sql when module is activated
  public static function onActivate() {
    $oDb = oxDb::getDb();
    $handle = fopen(dirname(__FILE__)."/../sql/views.sql", "r");
    while(($line = fgets($handle)) !== false) {
      $oDb->execute($line);
    }
    fclose($handle);
  }

  public static function onDeactivate() {

  }
}
