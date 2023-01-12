<?php
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM catogorieen");
$query->execute();
$logos = $query->fetchAll(PDO::FETCH_ASSOC);?>
?>

<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/header.php');

?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach ($logos as $logo) {
            echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
            echo  '<img class="border border-dark border-3 rounded-3 mt-2" src="'.$logo['merk'].'">' . "<br><br>" . "
                    ";
            echo '</div>';
            echo "<br>";}?>
    </div>
</div>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
