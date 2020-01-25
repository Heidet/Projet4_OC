<?php include("elements/header.php"); ?> 
<head>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector: 'textarea' });</script>
</head>
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
    
    
<?php include("elements/footer.php"); ?> 