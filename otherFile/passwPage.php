<?php
session_start();

?>

<?php include __DIR__ . '/head.php'; ?>

<div class="window ">

        <div class="container">
            <div class="row text-center">
                <h2>Strong Password Generator</h2>
                <h3>Genera una password sicura</h3>
            </div>
            <div class="row  sfondoBlu mb-3">
                <div class="col d-flex align-items-center">
                    <span>La password generata è: <?php echo $_SESSION['password'] ?></span>
                </div>
                
            </div>
            
            <button class="btn btn-secondary"><a href="../index.php">Torna indietro</a></button>
                
    
    
        </div>
    </div>

<?php include __DIR__ . '/foot.php'; ?>