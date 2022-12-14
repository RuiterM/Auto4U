<?php
$melding = "";
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM cards");
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['register'])) {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {

    }else {
        $melding = "Vul alles in!";
    }
}

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
<br>
<div class="container">
    <div class="d-flex justify-content-center" id="register_form">
        <form method="post">
            <br>
            <label for="email">Email:</label><br>
            <input type="email" id="input" class="border-bottom border-dark border-2" name="email"><br><br>
            <label for="email">Password:</label><br>
            <input type="email" id="input" class="border-bottom border-dark border-2" name="password"><br><br>
            <label for="email">Voornaam:</label><br>
            <input type="email" id="input" class="border-bottom border-dark border-2" name="firstName"><br><br>
            <label for="email">Achternaam:</label><br>
            <input type="email" id="input" class="border-bottom border-dark border-2" name="lastName"><br><br>
            <button type="submit" id="submit" name="register" class="d-flex border-bottom border-dark border-2" value="Registreer">Registreer</button><br>
        </form>
    </div>
</div>
<br>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
