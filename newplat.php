<?php
include('./partials/_header.php');

$error = [];
$errorMsg = "*Veuillez remplir le champ";
$sucess = false;


if(!empty($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    if(!empty($title)){
        if(strlen($title) < 4){
            $error['title'] = "*Le titre doit contenir 4 caractères minimum";
        } elseif (strlen($title) > 25){
            $error['title'] = "*Le titre doit contenir 25 caractères maximum";
        } 
    }
    else {
        $error['title'] = $errorMsg;
    }
    if(!empty($content)){
        if(strlen($content) < 25){
            $error['content'] = "*Le titre doit contenir 25 caractères minimum";
        }
    }
    else {
    $error['content'] = $errorMsg;
    }

    if(count($error) == 0){
        $sucess = true;
    }
}
?>

<h1 class="text_center">Ajouter un plat 🍩</h1>
<?php
if($sucess == false){ ?>

<div class="container_form">
    <form method="POST">
        <div class="container_input">
            <label for="title">Titre du plat</label>
            <input type="text" name="title" class="block" value="<?php if(isset($_POST['title'])){ echo $_POST['title'];} ?>">
            <p class="error">
            <?php 
            if(isset($error['title'])){
                echo $error['title'];
            }
            ?>
            </p>
        </div>
        <div class="container_input">
            <label for="content">Description</label>
            <textarea name="content" class="block"><?php if(isset($_POST['content'])){ echo $_POST['content'];} ?></textarea>
            <p class="error">
            <?php 
            if(isset($_POST['content'])){
                echo $error['content'];
            }
            ?>
            </p>
        </div>
        <div class="container_input">
            <label for="">Catégorie</label>
            <select name="category" class="block">
                <option value="">Choisir categorie</option>
                <option value="sucre">Sucré</option>
                <option value="sale">Salé</option>
            </select>
            <p class="error">
            <?php 
            if(isset($_POST['category'])){
                echo $error['category'];
            }
            ?>
            </p>
        </div>
        <div class="container_input">
            <label for="url_image">Photo du plat</label>
            <input type="file" name="url_image" class="block">
        </div>
        <input type="submit" value="Ajouter" class="btn" name="submit">
    </form>
</div>

<?php    
} else{
    echo"<p class='text_sucess text_center'>C'est good mon pelo</p>";
}
?>




<?php
include('./partials/_footer.php')
?>