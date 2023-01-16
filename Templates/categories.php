<!DOCTYPE html>
<html>
<?php
global $categories;




include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/header.php');

?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach ($categories as $category) {
            echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
            echo "<h2>".$category->name."</h2>";
            echo '<img class="border border-dark border-3 rounded-3 m-2" src="'.$category->picture.'">' ."<br>".
                 "<button><a href='/category/".$category->id."'>Bekijk!</a></button>" . "<br>";
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
