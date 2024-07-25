<?php

function generatePage($lunghezza, $array){
    if($lunghezza >= 8 && $lunghezza <=32){
        $passw = [];
        $arrScelto = rand(0, 3);
        for ($i=0; $i < $lunghezza; $i++) { 
            $arrScelto = $arrScelto <= 3 ? $arrScelto : 0 ;
            $elScelto = rand(0, count($array) - 1);
            array_push($passw,$array[$arrScelto][$elScelto]) ;
            $arrScelto++;
        }
        

        return implode($passw);
    }
    
    
};