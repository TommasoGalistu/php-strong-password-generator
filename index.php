<?php
// dati speciali
// !?&%$<>^+-*/()[]{}@#_=


$data = $_GET;
var_dump($data)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="mycss.css">
    <title>Document</title>
</head>
<body>
    <div class="window">

        <div class="container">
            <div class="row text-center">
                <h2>Strong Password Generator</h2>
                <h3>Genera una password sicura</h3>
            </div>
            <div class="row  sfondoBlu mb-3">
                <div class="col d-flex align-items-center">
                    <span>Generare una password di lunghezza compresa fra 8 e 32</span>
                </div>
            </div>
            <div class="row sfondoTabella">
                <div class="col d-flex flex-column align-items-start">
                    <p>Lunghezza password:</p>
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    
                </div>
                <div class="col">
                    <input type="number"><br>
                    
                    <div>
                        <form action="index.php" method="GET" class="mt-3">
                            <input id="si" name="caratteri" value="true" type="radio">
                            <label for="si">Si</label>
                            <input id="no" name="caratteri" value="false" type="radio">
                            <label for="no">No</label><br>
                            <input id="lettere" name="tipo" value="lettere" type="checkbox" >
                            <label for="lettere" class="mt-3">Lettere</label><br>
                            <input id="numeri" name="tipo" value="numeri" type="checkbox">
                            <label for="numeri">Numeri</label><br>
                            <input id="simboli" name="tipo" value="simboli" type="checkbox">
                            <label for="simboli" >Simboli</label>
                            <div class="mt-3">

                                <button type="submit" class="btn btn-primary me-3">Invia</button>
                                <button type="submit" class="btn btn-secondary me-3">Annulla</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                
    
    
        </div>
    </div>
</body>
</html>