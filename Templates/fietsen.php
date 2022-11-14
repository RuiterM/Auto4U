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
            $query = $db->prepare("select * FROM fietsenmaker");
            $query->execute();
            $fietsen = $query->fetchAll(PDO::FETCH_ASSOC);
            $teller = 1;

    echo "<table>";
    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Merk</td>";
    echo "<td>Model</td>";
    echo "<td>Prijs</td>";
    echo "</tr>";
            foreach ($fietsen as $fiets) {
                echo "<tr>";
                echo "<td>". $teller ."</td>";
                echo "<td>". $fiets['merk'] ."</td>";
                echo "<td>".$fiets['model'] ."</td>";
                echo "<td>";
                echo "<a href='/details/".$fiets['id']. "'>";
                echo "Details";
                echo "</a><br>";
                echo "</td>";
                echo "</tr>";
                $teller++;
            }
            ?>
</div>
</body>
</html>
<?php
include_once ('defaults/footer.php');
?>