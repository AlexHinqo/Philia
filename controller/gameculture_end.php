<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include "$root/model/temp.php";

$test = $test;

$title = "Culture Game End";
include "$root/view/nav.php";
include "$root/view/gameculture_end.php";
