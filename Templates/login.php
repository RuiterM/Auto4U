<?php
global $checkLogin;
$melding = '';

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
            <?php
            $user = checkLogin();

            echo $user;
            if ($user == "USER")
            {
                //header("admin/adminhome.php");
                echo 'faya mos';
            }
            elseif ($user == "ADMIN")
            {
                header("location: ../admin.php");
            }
            ?>
        </form>
    </div>
</div>
<br>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
