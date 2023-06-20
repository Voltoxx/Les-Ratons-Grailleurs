<?php
include('./partials/_header.php');
include ('./utils/data_sale.php')
?>

<h1 class="text_center py_2">Nos plats salés 🥙</h1>

<div class="flex justify_around">
<?php    
foreach($platsSales as $plat) 
{
    include('./partials/_card.php');
}
?>
</div>


<?php
include('./partials/_footer.php')
?>