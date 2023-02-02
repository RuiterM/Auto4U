<?php
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM cards");
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);?>

<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/header.php');

?>
<div class="d-flex justify-content-center">
    <div>
        <h1 class="pt-2">Goededag Member, welkom bij de member pagina van Auto4u</h1>
        <i class="d-flex justify-content-center fw-bold fst-normal text-secondary">Goeden<?php $datum = date("H:i");

            if ($datum > 6 && $datum < 12) {
                echo "ochtend";
            }
            elseif ($datum > 12 && $datum < 18) {
                echo "middag";
            }
            elseif ($datum > 18 && $datum < 24) {
                echo "avond";
            }
            elseif ($datum > 24 || $datum < 6) {
                echo "nacht";
            } ?> de datum van vandaag is: <?php
            $datum = date('d-m-Y H:i');
            echo $datum
            ?></i></p>
    </div>
</div>
<div class="container pb-3">
    <div class="row d-flex justify-content-center">
        <?php foreach ($autos as $auto) {
            echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
            echo  '<img class="border border-dark border-3 rounded-3 mt-2" src="/'.$auto['img'].'">' . "<br><br>" . "
                    " . $auto["beschrijving"];
            echo '</div>';
            echo "<br>";}?>
    </div>
</div>
<div class="container pb-3">
    <div class="bg-secondary border border-dark rounded-3">
        <h1>Auto4U!</h1><br>
        <h3>De website waar u alles over elke auto komt te weten!</h3>
    </div>
</div>

<?php
include_once('defaults/footer.php');
?>
</body>

</html>
