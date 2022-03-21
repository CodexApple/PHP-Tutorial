<?php

require_once("Database.php");
require_once("UserModel.php");
require_once("ProfileModel.php");

$user = new UserModel($dbConn);
$profile = new ProfileModel($dbConn);
