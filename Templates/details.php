<!DOCTYPE html>
<html>
<?php
global $product;
global $review;



include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/header.php');

?>
<br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <table class="table">
            <tr>
                <tc>
                    <?php
                    echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
                    echo "<h2>".$product->name."</h2>";
                    echo '<img class="border border-dark border-3 rounded-3 m-2" src="/img/'.$product->picture.'">' ."<br>";
                    echo '<h4>'.$product->beschrijving .'<h4>'.'<br>';
                    echo '<h4>De prijs van deze auto is: <br>'.$product->prijs .'<h4>'.'<br>';
                    echo '</div>';
                    echo "<br>";
                    ?>
                </tc>
                <h3>Reviews</h3>
                <td>
                    <?php
                    echo "<div class='card bg-secondary' style='margin: 5px'>";
                    echo "<h1 style='margin-left: 10px'>".$review->name."</h1>".'<br>';
                    echo '<h4 style="margin-left: 10px">'.$review->review .'<h4>'.'<br>';;
                    echo '</div>';
                    echo "<br>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
include_once('defaults/footer.php');
?>
</body>

</html>

