<?php

function generatePage($lunghezza, $array){
    if($lunghezza >= 8 && $lunghezza <=32){
        $passw = [];
        for ($i=0; $i < $lunghezza; $i++) { 
            $arrScelto = rand(0, 3);
            $elScelto = rand(0, count($array) - 1);
            array_push($passw,$array[$arrScelto][$elScelto]) ;
        }
        

        return implode($passw);
    }
    
    
};