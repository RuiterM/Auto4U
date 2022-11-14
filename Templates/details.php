<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php

include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>


    <?php
    $db = new PDO('mysql:host=localhost;dbname=fietsenmaker',
        "root" . "");
    $query = $db->prepare("select * FROM fietsenmaker WHERE id= :id");
    $query->bindParam(":id", );
    $query->execute();
    $fietsen = $query->fetch(PDO::FETCH_ASSOC);


        echo "Merk: " . $fiets['merk'] . "<br>";
        echo "Model: " . $fiets['model'] . "<br>";
        echo "Prijs: €". $fiets['price'] . "<br><br>";

    ?>
    <a href="master.php">Terug naar master pagina</a>
</div>
</body>
</html>
<?php
include_once ('defaults/footer.php');
?>