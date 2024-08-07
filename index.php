<?php
// dati speciali
// !?&%$<>^+-*/()[]{}@#_=
$datiPassw = [
    'lettere' => [ 
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ],
    'number' => [
        0 , 1, 2, 3, 4, 5, 6, 7, 8, 9
    ],
    
    'simboli' => [
        '!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', 
        '[', ']', '{', '}', '@', '#', '_', '='
    ]

    ];
include __DIR__ . "/otherFile/function.php";   

$data = $_GET;

// se è settata e l'utente scrive qualcosa entra
$password = '';
$errorePassword = false;
if(isset($data) && !empty($data)){
    
    $password = generatePage($data, $datiPassw);
    
    if($password){
        $errorePassword = false;
        session_start();
        $_SESSION['password'] = $password;
        $_SESSION['lunghezza'] = strlen($password);
        
        header("Location: ./otherFile/passwPage.php");

    }else{
        $errorePassword = true;
    }
}

?>
<?php include __DIR__ . '/otherFile/head.php' ?>
    <div class="window">

        <div class="container">
            <div class="row text-center">
                <h2>Strong Password Generator</h2>
                <h3>Genera una password sicura</h3>
            </div>
            <div class="row  sfondoBlu mb-3">
                <div class="col d-flex align-items-center">
                    <?php if(!$errorePassword): ?>
                    <span>Generare una password di lunghezza compresa fra 8 e 32</span>
                    <?php else: ?>
                    <span>ERRORE!!! Generare una password di lunghezza compresa fra 8 e 32</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row sfondoTabella">
                <div class="col d-flex flex-column align-items-start">
                    <p>Lunghezza password:</p>
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    
                </div>
                <div class="col">
                    <form action="index.php" method="GET">
                        <input  name="lunghezzaPassw" type="number" class="mb-3"><br>
                        <input id="si" name="caratteri" value="true" type="radio">
                        <label for="si">Si</label>
                        <input id="no" name="caratteri" value="" type="radio">
                        <label for="no">No</label><br>
                        <input id="lettere" name="lett" value="lettere" type="checkbox" >
                        <label for="lettere" class="mt-3">Lettere</label><br>
                        <input id="numeri" name="num" value="number" type="checkbox">
                        <label for="numeri">Numeri</label><br>
                        <input id="simboli" name="simb" value="simboli" type="checkbox">
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
    <?php include __DIR__ . '/otherFile/foot.php' ?>