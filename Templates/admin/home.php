<?php
<<<<<<< Updated upstream:Templates/admin/home.php
echo "admin home";
=======
global $checkLogin;
$melding = '';
//$melding = "";
//$db = new PDO('mysql:host=localhost;dbname=auto4u',
//    "root" . "");
//$query = $db->prepare("select * FROM cards");
//$query->execute();
//$autos = $query->fetchAll(PDO::FETCH_ASSOC);
//
//if (isset($_POST['Login'])) {
//    if (!empty($_POST['email']) && !empty($_POST['password'])) {
//
//        $Email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
//        $Password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
//        $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
//
//        if ($Email === false) {
//            $melding = "vul een email in!";
//        }else {
//            $query = $db->prepare("SELECT * FROM accounts WHERE email = ? AND password = ?");
//
//            $query->bindParam(":email", $Email);
//            $query->bindParam(":password", $hashed_password);
//            if ($query->execute()) {
//                $melding = "Login jatoch";
//
//            }
//        }
//
//
//
//    }else {
//        $melding = "Vul alles in!";
//    }
//}

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
            <button type="submit" id="submit" name="register" class="d-flex border-bottom border-dark border-2" value="Login">Login</button><br>
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
>>>>>>> Stashed changes:Templates/admin/adminhome.php
