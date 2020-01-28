<!---- Include Menu ---->
<?php include("views/template.php"); ?> 
<!---- Include slider ---->
<?php include("elements/caroussel.php"); ?> 

<?php 


require_once("models/Post.php");

//$post = $req->fetch();
$posts = getAllPosts();
//echo "<pre>";
//print_r($posts); 
//echo "</pre>";
foreach($posts as $post) { // rechercher tout les posts par post
    /**echo "<h1>" . $post['title'] . "</h1>";
    echo "<p>" . $post['content'] . "</p>";
    echo "<p>" . $post['date'] . "</p>";
    echo "<hr />"; **/
    ?>
        <div class="container">
            <div class="row">
                <div class="card mb-4">

                    <div class="card-body">
                        <h2 class="card-title"><?= $post->getTitle() ?></h2>
                        <p class="card-text"><?= $post->getContent() ?></p>
                        <a href="#" class="btn btn-primary">Lire plus &rarr;</a>
                    </div>
                    <div class="card-footer text-muted"><?= $post->getDate() ?></div>
                </div>
            </div>
        </div>
    <?php
}   
?>
