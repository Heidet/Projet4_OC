
<?php $title = htmlspecialchars($post['title']); ?>
<?php ob_start(); ?>

<div class="container" style="margin-top: 15px;" id="page_chapitre">
    <p class="bouton_retour pt3">
        <a href="shttp://localhost:8888/">
            <button class="btn btn-info">Retour</button>
        </a>
    </p>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title"><?= htmlspecialchars($post['title']) ?></h2> <!-- Pour échapper le code HTML, il suffit d'utiliser la fonctionhtmlspecialchars -->
            <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])) ?></p> <!-- nl2br ajoute insère un retour à la ligne HTML -->
        </div>
        <div class="card-footer text-muted"><?= $post['date'] ?></div>
    </div>

    <?php foreach ($comments as $comment): ?><!-- parcourir les comment  -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="../public/img/User.jpg" alt="">
        <div class="media-body">
            <h5 class="mt-0"><?= htmlspecialchars($comment['fullname']) ?></h5> <!-- afficher le nom  -->
                <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p> <!-- parcourir le contenu  -->
                <p>Poster le : <date><?= $comment['date'] ?></date></p><!-- parcourir les date  -->
                <a href="index.php?action=signaler&commentId=<?=$comment['id']?> " class="btn btn-sm btn-danger">Signaler</a>
        </div>
    </div>
    <?php endforeach; ?><!-- stop parcourir -->

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <h2>Commentaires</h2>
            <div class="form-group">
                <label for="fullname">Nom : </label>
                <input type="text" id="fullname" name="fullname" class="form-control input-sm" />
            </div>
            <div class="form-group">
                <label for="content">Commentaire :</label>
                <textarea id="content" name="content" class="form-control input-sm"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
    </div>


<?php $contentPage = ob_get_clean(); ?>

<?php require('template.php'); ?>

