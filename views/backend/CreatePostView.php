
<?php ob_start(); ?>

<p class="retour">
    <a href="index.php?action=">
        <button class="btn btn-info">Retour</button>
    </a>
</p>
<div class="container-fluid">
          <form class="pt-5" method="post">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Titre du Billet</span>
                  </div>
                  <input type="text" id="title" name="title" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" />
              </div>
              <br />
              <textarea id="content" class="editor" name="content" placeholder="Contenu" rows="5" cols="64"></textarea>
              <br />
              <button type="submit" class="btn btn-success">Ajouter</button>
          </form>
      </div>
<?php $contentPage =  ob_get_clean();?> 

<?php require('template.php')?>