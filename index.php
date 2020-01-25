<!---- Include Menu ---->
<?php include("elements/header.php"); ?> 
<!---- Include Menu ---->
<?php include("elements/nav.php"); ?> 
<!---- Include slider ---->
<?php include("elements/slide.php"); ?> 

<?php 
require_once('database.php');

$req = $DB->query("SELECT * FROM posts ORDER BY id DESC");
//$post = $req->fetch();
$posts = $req->fetchAll();
//echo "<pre>";
//print_r($posts); 
//echo "</pre>";
foreach($posts as $post) {
    /**echo "<h1>" . $post['title'] . "</h1>";
    echo "<p>" . $post['content'] . "</p>";
    echo "<p>" . $post['date'] . "</p>";
    echo "<hr />"; **/
    ?>
        <div class="container">
            <div class="row">
                <div class="card mb-4">

                    <div class="card-body">
                        <h2 class="card-title"><?= $post['title'] ?></h2>
                        <p class="card-text"><?= $post['content'] ?></p>
                        <a href="#" class="btn btn-primary">Lire plus &rarr;</a>
                    </div>
                    <div class="card-footer text-muted"><?= $post['date'] ?></div>
                </div>
            </div>
        </div>
    <?php
}   
?>
 
		

<?php include("elements/footer.php"); ?> 
