<?php

session_start();

if(strpos($_SESSION['word'], $_POST['letter']) === false)
{
    $strposletter = strpos($_SESSION['word'], $_POST['letter']);

    $array = str_split($_SESSION['word']);

    $return = array("word" => $array, "letter" => $strposletter, "loose" => "Perdu !");
    
    echo json_encode($return);
}
else 
{
    $underscore = $_SESSION['arraye'];
    
    $strposletter = strpos($_SESSION['word'], $_POST['letter']);

    $array = str_split($_SESSION['word']);
    foreach($array as $pos => $letter){
        if($array[$pos] == $_POST['letter']){
            $underscore[$pos] = $letter;
        }
    }
    $_SESSION['arraye'] = $underscore;

    $u = implode($underscore);

    if($u == $_SESSION['word']) {
        $return = array("word" => $array, "letter" => $strposletter, "under" => $underscore, "lalettre" => $_POST['letter'], "win" => "Gagnée !");
        echo json_encode($return);
    } else {
        $return = array("word" => $array, "letter" => $strposletter, "under" => $underscore, "lalettre" => $_POST['letter']);
        echo json_encode($return);
    }
}   