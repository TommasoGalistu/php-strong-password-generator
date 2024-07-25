<?php

function generatePage($data, $array){
    
    if($data['lunghezzaPassw'] >= 8 && $data['lunghezzaPassw'] <=32){
        // array finale
        $arrayFiltred = [];
        $passw = [];
        $ripetiCaratteri = false;
        $lunghezzaArrayFiltred = 0;
        // selezione filtri utente
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
            $lunghezzaArrayFiltred += count($value) - 1;
        }
         
        if($ripetiCaratteri){
            for ($i=0; $i < $data['lunghezzaPassw']; $i++) { 
                // coordinata chiave
                $randomKey = array_rand($arrayFiltred);
                // coordinata valore
                $elScelto = rand(0, count($arrayFiltred[$randomKey]) - 1);
                $elementoArray = $arrayFiltred[$randomKey][$elScelto];
                array_push($passw, $elementoArray) ;
                
            }

        }else{
            
            while(count($passw) < $data['lunghezzaPassw'] && count($passw) - 1 < $lunghezzaArrayFiltred) { 
                // coordinata chiave
                $randomKey = array_rand($arrayFiltred);
                // coordinata valore
                $elScelto = rand(0, count($arrayFiltred[$randomKey]) - 1);
                $elementoArray = $arrayFiltred[$randomKey][$elScelto];
                // se non è già dentro l'array lo pusho
                if(!in_array($elementoArray , $passw)){

                    array_push($passw,$elementoArray) ;
                }
                
            }
        }
        
        // ritorno l'array che diventa stringa
        return implode($passw);
    }
    
    
};