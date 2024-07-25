<?php

function generatePage($data, $array){
    if($data['lunghezzaPassw'] >= 8 && $data['lunghezzaPassw'] <=32){
        $arrayFiltred = [];
        $passw = [];
        $ripetiCaratteri = false;
        $lunghezzaArray = 0;
        if(isset($data['lett'])){
            array_push($arrayFiltred, $array['lettere']);
          }
        if(isset($data['num'])){
            array_push($arrayFiltred, $array['number']);
          }
        if(isset($data['simb'])){
            array_push($arrayFiltred, $array['simboli']);
          }
        if(isset($data['caratteri'])){
            $ripetiCaratteri = $data['caratteri'];
        }

        // se l'utente non sceglie niente uso l'array di partenza
        if(!$arrayFiltred){
            $arrayFiltred = $array;
        }
        // calcolo la lunghezza degli array
        foreach($arrayFiltred as $key => $value){
            $lunghezzaArray += count($value) - 1;
        }
         
        if($ripetiCaratteri){
            for ($i=0; $i < $data['lunghezzaPassw']; $i++) { 
                // coordinata chiave
                $randomKey = array_rand($arrayFiltred);
                // coordinata valore
                $elScelto = rand(0, count($arrayFiltred[$randomKey]) - 1);
                array_push($passw,$arrayFiltred[$randomKey][$elScelto]) ;
                
            }

        }else{
            
            while(count($passw) < $data['lunghezzaPassw'] && $lunghezzaArray > count($passw) - 1) { 
                // coordinata chiave
                $randomKey = array_rand($arrayFiltred);
                // coordinata valore
                $elScelto = rand(0, count($arrayFiltred[$randomKey]) - 1);
                $elementoArray = $arrayFiltred[$randomKey][$elScelto];
                if(!in_array($elementoArray , $passw)){

                    array_push($passw,$elementoArray) ;
                }
                
            }
        }
        
        // l'array diventa stringa
        return implode($passw);
    }
    
    
};