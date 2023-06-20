<?php
include('./partials/_header.php');
include('./utils/pdo.php');

$sql = "SELECT * FROM recette ORDER BY title";
$query = $pdo->prepare($sql);
$query->execute();
$plats = $query->fetchAll();

// echo '<pre>';
// print_r($plats);
// echo '</pre>';
?>

<h1 class="text_center">Bienvenue chez les Ratons Grailleurs 🦝</h1>

<?php
include './partials/homepage/_section-sucre.php';
?>

<?php
include './partials/homepage/_section-sale.php';
?>


<?php
include('./partials/_footer.php')
?>