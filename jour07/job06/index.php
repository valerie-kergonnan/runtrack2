<?php

function leetspeak($str){
    $result = "";
    $i = 0;


    // parcourir chaque caractere

    while (isset($str[$i])){
        $char = $str[$i];

        // verifier  les majuscules et les minuscules
        if ($char === "A" || $char === "a"){
            $result .= "4";
        } elseif ($char ==="B" || $char === "b"){
            $result .="8";
        }elseif ($char === "E" || $char === "e"){
            $result .="3";
        }elseif ($char === "G" || $char === "g"){
            $result .= "6";
        }elseif ($char === "L" || $char === "l"){
            $result .= "1";
        }elseif ($char === "S" || $char === "s"){
            $result .= "5";
        }elseif ($char === "T" || $char === "t"){
            $result .= "7";
        }else{
            
            $result .= $char;
        }
        $i++;
    }
    return $result;
}

// exemple d'utilisation 
$text = "Salut Les Gars !";
echo leetSpeak($text);
?>