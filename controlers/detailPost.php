<?php require("views/frontend/template.php"); ?>
<?php require_once("models/PostManager.php"); ?>
<?php require_once("models/CommentManager.php"); ?>

<?php 
    $post_id = intval($_GET['post_id']);  //assure que le paramétre de l'url et bien un entière 
    //echo $post_id; 
    $post = getPostById($post_id);
    $comments = $post->getComments();

    if(isset($_POST) && isset($_POST['author'])) { // 
    $comment = new CommentManager(
        null, 
        $_POST['author'], 
        $_POST['comment'], 
        $post_id
    );

    echo $comment->save();
    
    echo 'comment sauvegarder';
    }
    

?>

<div class="container" style="margin-top: 15px;" id="page_chapitre">
    <p class="bouton_retour pt3">
        <a href="shttp://localhost:8888/">
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

    <?php foreach ($comments as $comment): ?><!-- parcourir les comment  -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0"><?= htmlspecialchars($comment->getFullName()) ?></h5> <!-- afficher le nom  -->
                <p><?= htmlspecialchars($comment->getContent()) ?></p> <!-- parcourir le contenu  -->
                <p>Poster le : <date><?= $comment->getDate() ?></date></p><!-- parcourir les date  -->
        </div>
    </div>
    <?php endforeach; ?><!-- stop parcourir -->
  
    <form method="post">
        <h2>Commentaires</h2>
        <div class="form-group">
            <label for="author">Nom : </label>
            <input type="text" id="author" name="author" class="form-control input-sm" />
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

