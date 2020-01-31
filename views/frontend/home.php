<!---- Include Menu ---->
<?php include("views/template.php"); ?> 
<!---- Include slider ---->
<?php include("elements/caroussel.php"); ?> 

<?php 

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
                        <a href="views/frontend/detailPost.php?post_id=<?= $post->getId() ?>" class="btn btn-primary">Lire plus &rarr;</a> <!-- Transmition ID post par URL -->
                    </div>
                    <div class="card-footer text-muted"><?= $post->getDate() ?></div>
                </div>
            </div>
        </div>
    <?php
}   
?>
