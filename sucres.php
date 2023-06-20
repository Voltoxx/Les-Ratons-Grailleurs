<?php
include('./partials/_header.php');
include ('./utils/data_sucre.php');
include('./utils/pdo.php');

$sql = "SELECT * FROM recette ORDER BY title";
$query = $pdo->prepare($sql);
$query->execute();
$plats = $query->fetchAll();
?>

<h1 class="text_center py_2">Nos plats sucrés 🍭</h1>

<div class="section_card">
<?php    
foreach($plats as $plat) 
{
    include('./partials/_card.php');
}
?>
</div>


<?php
include('./partials/_footer.php')
?>