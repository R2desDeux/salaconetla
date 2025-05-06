<?php 
    if (isset($_GET["idResidence"])) {
        $idResidence = $_GET["idResidence"]; 
    } else {
        $idResidence = 1; // On prend la première résidence (ampere)
    }

    require "./connexionbdd.php"; 

    $sqlResidence = "SELECT nomResidence, adresseResidence, villeResidence, cpResidence, photoResidence 
                     FROM residences WHERE idResidence = $idResidence;"; 
    $reponseRes = $pdo->query($sqlResidence); 
    $residenceCourante = $reponseRes->fetch(PDO::FETCH_ASSOC); 
?>

<main class="container pt-3"> 
    <h1 class="text-center text-dark"> 
        Les résidences : 
        <span class="text-secondary"><?php echo $residenceCourante["nomResidence"] ?></span>
    </h1>
    <hr>    
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="./photos/<?php echo $residenceCourante["photoResidence"] ?>" 
                             class="img-fluid rounded-start m-1">
                    </div>
                    <div class="col-md-10 align-self-center">
                        <div class="card-body p-0 ps-3">
                            <h4 class="card-title">
                                Résidence <?php echo $residenceCourante["nomResidence"] ?>
                            </h4>
                            <p class="card-text">
                                <?php echo $residenceCourante["adresseResidence"] ?>
                                <br>
                                <?php echo $residenceCourante["cpResidence"] ?>
                                <?php echo $residenceCourante["villeResidence"] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>