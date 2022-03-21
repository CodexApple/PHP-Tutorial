<?php

require_once("Core.php");

$user->create($_POST['username'], $_POST['password']);
$profile->create($_POST['fname'], $_POST['lname']);
