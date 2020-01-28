
<?php include("../template.php"); ?> 


<div class="container" id="page_chapitre">

<p class="bouton_retour">
    <a href="index.php">
        <button class="btn btn-info">Retour</button>
    </a>
</p>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h1 class="panel-title">
            <!-- //htmlspecialchars($post['title']) ?>-->
          <!-- <em>le  //$post['creation_date_fr'] ?></em>-->
        </h1>
    </div>

    <div class="panel-body">
        <?= nl2br($post['content']) ?> 
    </div>

    <div class="panel-footer">
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <h2>Commentaires</h2>
            <div class="form-group">
                <label for="author">Nom :</label>
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

</div>
