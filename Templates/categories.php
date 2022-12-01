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


<?php
include_once('defaults/footer.php');
?>
</body>

</html>
