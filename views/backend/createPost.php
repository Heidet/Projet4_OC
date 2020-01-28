<?php include("view/template.php"); ?> 
<body>

    <form method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Titre du Billet</span>
            </div>
            <input type="text" name="title" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" />
        </div>

        <br />
        <textarea name="content" placeholder="Contenu" rows="5" cols="64"></textarea>
        <br />
        <button type="submit">Ajouter un post</button>
    </form>
  
