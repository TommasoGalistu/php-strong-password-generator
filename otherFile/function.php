<?php

function generatePage($data, $array){
    // if($data['lunghezzaPassw'] >= 8 && $data['lunghezzaPassw'] <=32){
        $arrayFiltred = [];
        $passw = [];
        if(isset($data['lett'])){
            array_push($arrayFiltred, $array['lettere']);
            
          }
        if(isset($data['num'])){
            array_push($arrayFiltred, $array['number']);
            
          }
        if(isset($data['simb'])){
            array_push($arrayFiltred, $array['simboli']);
            
          }
        
          
        
        for ($i=0; $i < $data['lunghezzaPassw']; $i++) { 
            $randomKey = array_rand($arrayFiltred);
            $elScelto = rand(0, count($arrayFiltred[$randomKey]) - 1);
            array_push($passw,$arrayFiltred[$randomKey][$elScelto]) ;
            
        }
        
        // l'array diventa stringa
        return implode($passw);
    // }
    
    
};