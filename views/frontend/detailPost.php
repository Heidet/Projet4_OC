

<?php include("../template.php"); ?> 
<?php require_once("../../models/PostManager.php"); ?> 

<?php 
    $post_id = intval($_GET['post_id']);  //assure que le paramétre de l'url et bien un entière 
    //echo $post_id; 
    $post = getPostById($post_id);
    $comments = $post->getComments();


?>

<div class="container" id="page_chapitre">

<p class="bouton_retour">
    <a href="index.php">
        <button class="btn btn-info">Retour</button>
    </a>
</p>

<div class="card mb-4">

        <div class="card-body">
            <h2 class="card-title"><?= $post->getTitle() ?></h2>
            <p class="card-text"><?= $post->getContent() ?></p>
        </div>
            <div class="card-footer text-muted"><?= $post->getDate() ?></div>
</div>

    <?php foreach ($comments as $comment): ?> <!-- parcourir les comment  -->
            <h3><?= $comment->getFullName() ?> </h3>  <!-- afficher le nom  -->
            <h3><?= $comment->getContent() ?> </h3> <!-- parcourir le contenu  -->
            <h3><?= $comment->getDate() ?> </h3>    <!-- parcourir les date  -->
    <?php endforeach; ?><!-- stop parcourir -->
   

        <form method="post">
            <h2>Commentaires</h2>
            <div class="form-group">
                <label for="author">Nom : </label>
                <input type="text" id="author" name="author" class="form-control input-sm"/>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire :</label>
                <textarea id="comment" name="comment" class="form-control input-sm"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>

    </div>

</div>

