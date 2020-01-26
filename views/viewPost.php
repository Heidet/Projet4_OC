<?php include("../views/template.php"); ?>

<div class="container pt-5" id="detail_post">
    <p class="bouton_retour">
        <a href="../index.php">
            <button class="btn btn-info">Retour</button>
        </a>
    </p>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">titre</h1>
        </div>

        <div class="panel-body">
            <p> contenu </p>
        </div>

        <div class="panel-footer">
            <form method="post">
                <h2>Commentaires</h2>
                <div class="form-group">
                    <label for="author">Nom :</label>
                    <input type="text" id="author" name="author" class="form-control input-sm" />
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire :</label>
                    <textarea id="comment" name="comment" class="form-control input-sm"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" />
                </div>
                <div class="card-footer text-muted">date</div>
            </form>
        </div>
    </div>
</div>