<?php

require_once("library.php");
require_once("Core.php");

// $user->create($_POST['username'], $_POST['password']);
// $profile->create($_POST['fname'], $_POST['lname']);

$library = new Library();
$list = ["Hello", "World", "Goodbye", "World"];

// echo $library->generateDate("30");
// $user->create($library->generateDate("3"), "pass");
// $profile->create($user->create("username", "password"), "firstname", "lastname", "address");
// $library->readArrayContent($list);
// $checkArray = $library->checkArrayContent($list, "Username");

// if ($checkArray) {
//     echo "True";
// } else {
//     echo "False";
// }

// foreach ($list as $string) {
//     echo $string . "\n";
//     echo "{$string}\n";
// }

// $libraryCheck = $library->list($list, "Username");

// if ($libraryCheck) {
//     echo "True";
// } else {
//     echo "False";
// }

// $library->listAll($list);
