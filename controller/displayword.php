<?php

session_start();

if(strpos($_SESSION['word'], $_POST['letter']) !== false)
{
    $strposletter = strpos($_SESSION['word'], $_POST['letter']);

    $array = str_split($_SESSION['word']);

    $return = array("word" => $array, "letter" => $strposletter);
    
    echo json_encode($return);
}