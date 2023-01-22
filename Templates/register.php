<?php
$melding = "";
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM cards");
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['register'])) {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {

        $Email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        $Password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        $FirstName = filter_input(INPUT_POST,'firstName');
        $LastName = filter_input(INPUT_POST,'lastName');

        if ($Email === false)
        {
            $melding = "vul een email in!";
        }
        else
        {
            $query = $db->prepare("INSERT INTO accounts(email, password, firstName, lastName) VALUES (:email, :password, :firstName, :lastName)");

            $query->bindParam(":email", $Email);
            $query->bindParam(":password", $Password);
            $query->bindParam(":firstName", $FirstName);
            $query->bindParam(":lastName", $LastName);

            if ($query->execute()) {
                header('location:/login');
            }
        }



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
            <input type="password" id="input" class="border-bottom border-dark border-2" name="password"><br><br>
            <label for="email">Voornaam:</label><br>
            <input type="text" id="input" class="border-bottom border-dark border-2" name="firstName"><br><br>
            <label for="email">Achternaam:</label><br>
            <input type="text" id="input" class="border-bottom border-dark border-2" name="lastName"><br><br>
            <button type="submit" id="submit" name="register" class="d-flex border-bottom border-dark border-2" value="Registreer">Registreer</button><br>
            <?php echo $melding ?><br><br>
        </form>
    </div>
</div>
<br>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
