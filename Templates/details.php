<!DOCTYPE html>
<html>
<?php
global $product;
global $reviews;



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
                    foreach ($reviews as $review){
                    echo "<div class='card bg-secondary' style='margin: 5px'>";
                    echo "<h5 style='margin-left: 10px; margin-top: 5px;'>".$review->date."</h5>".'<br>';
                    echo "<h2 style='margin-left: 10px'>".$review->name."</h2>".'<br>';
                    echo "<h3 style='margin-left: 10px'>".$review->stars." <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-star-fill' viewBox='0 0 16 16'><path d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/></svg></h3>".'<br>';
                    echo '<h4 style="margin-left: 10px">'.$review->description .'<h4>'.'<br>';;
                    echo '</div>';
                    echo "<br>";
                    }
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

