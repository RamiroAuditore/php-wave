<?php
    $text = $_GET['wave_text'];
    $result = array();

    for ($i=0; $i < strlen($text); $i++) { 
        $temp_text = $text;
        if(!ctype_space($temp_text[$i])){
            $temp_text[$i] = strtoupper($temp_text[$i]);
            $result[] = $temp_text;
        }
    }

    header('Content-type: application/json');
    echo json_encode($result);
?>