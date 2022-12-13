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
<div class="container">
    <div class="d-flex justify-content-center">
        <form method="post">
            <label for="email">Email</label>
            <input type="email" style="border: solid black 2px; background: transparent" name="email">
            <label for="email">Password</label>
            <input type="email" style="border: solid black 2px; background: transparent" name="password"><br>
            <label for="email">Voornaam</label>
            <input type="email" style="border: solid black 2px; background: transparent" name="firstName">
            <label for="email">Achternaam</label>
            <input type="email" style="border: solid black 2px; background: transparent" name="lastName">
        </form>
    </div>
</div>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
