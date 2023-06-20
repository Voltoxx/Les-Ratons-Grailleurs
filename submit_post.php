<?php
include('./partials/_header.php')
?>

<h1 class="text_center">Traitement du formulaire 📝</h1>

<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// 1. Récupérer les données du formulaire
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];

// 2. Connexion à la BDD


// 3. Requête SQL
// $sql = "INSERT INTO post (title, content, category, url_image) VALUES ('$title', '$content', '$category', '$url_image')";

// 4. Exécution de la requête SQL
// $result = mysqli_query($connection, $sql);

// 5. Redirection vers la page d'accueil
// header('Location: index.php');
if(empty($title) || empty($content) || empty($category)){
    echo '<p class="error">Veuillez remplir tous les champs</p>';
}
else{ 
?>
<h2> Voici les infos du plat ajouté : </h2>
<ul>
    <li>Nom de la recette : <?= htmlspecialchars($title) ?></li>
    <li>Description de la recette : <?= htmlspecialchars($content) ?></li>
    <li>Categorie de la recette : <?= htmlspecialchars($category) ?></li>
</ul>
<?php
}
?>

<?php
include('./partials/_footer.php')
?>