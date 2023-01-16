<!DOCTYPE html>
<html>
<?php
global $products;




include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/header.php');

?>
<br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach ($products as $product) {
            echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
            echo "<h2>".$product->name."</h2>";
            echo '<img class="border border-dark border-3 rounded-3 m-2" src="/img/'.$product->picture.'">' ."<br>".
                 "<button><a class='text-decoration-none text-dark' href='/product/".$product->id."'>Bekijk!</a></button>" . "<br>";
            echo '</div>';
            echo "<br>";
        }
        ?>
    </div>
</div>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>
