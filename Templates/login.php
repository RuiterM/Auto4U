<?php
<<<<<<< Updated upstream
$melding = "";
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM cards");
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['Login'])) {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {

        $Email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        $Password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        $FirstName = filter_input(INPUT_POST,'firstName');
        $LastName = filter_input(INPUT_POST,'lastName');
        $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

        if ($Email === false) {
            $melding = "vul een email in!";
        }else {

            $Email = $_POST['email'];
            $hashed_password = $_POST['password'];
            $FirstName = $_POST['firstName'];
            $LastName = $_POST['lastName'];

            $query = $db->prepare("INSERT INTO accounts(email, password, firstName, lastName) VALUES (:email, :password, :firstName, :lastName)");

            $query->bindParam(":email", $Email);
            $query->bindParam(":password", $hashed_password);
            $query->bindParam(":firstName", $FirstName);
            $query->bindParam(":lastName", $LastName);

            if ($query->execute()) {
                $melding = "Gegevens zijn toegevoegd!";

            }
        }



    }else {
        $melding = "Vul alles in!";
    }
}

=======
global $checkLogin;
$melding = '';
>>>>>>> Stashed changes
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
            <input type="password" id="input" class="border-bottom border-dark border-2" name="password" id="password"><br><br>
            <button type="submit" id="submit" name="register" class="d-flex border-bottom border-dark border-2" value="Login">Login</button><br>
            <?php echo $melding ?><br><br>
<<<<<<< Updated upstream
=======
            <?php
            $user = checkLogin();

            if ($user == "USER")
            {
                header("admin/adminhome.php");
            }
            elseif ($user == "ADMIN")
            {
                echo $user;
                header('../public/admin.php');
            }
            ?>
>>>>>>> Stashed changes
        </form>
    </div>
</div>
<br>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
