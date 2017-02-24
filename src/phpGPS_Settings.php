<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  class phpGPS_Settings {
    //Map Info
    public static $_defaultZoom = 3;
    public static $_defaultCenterLat = "41.988308";
    public static $_defaultCenterLong = "-99.483202";
    public static $_defaultMapType = "roadmap";
    public static $_windowW = 500;
    public static $_windowH = 500;
    public static $_embedAddition = 20;

    public static $_devKey = "AIzaSyBCvQCzXtrmVveScmI3OoRT3PqLUjwTz48";

    //GPS Defaults
    public static $_defaultDeviceID = 1;
    public static $_defaultTypeID = 1;

    public static $_title = "phpGPS";

    //Database Info
    public static $_host = "localhost";
    public static $_username = "cesaralx";
    public static $_password = "altair";
    public static $_dbname = "phpgps";

    //Days to delay displaying markers
    public static $_markerDelay = 0;

    //Secret key for adding an entry using addGpsEntry.php
    public static $_secretKey = "1234";
  }
?>
