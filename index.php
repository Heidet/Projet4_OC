<!---- Include Menu ---->
<?php include("elements/header.php"); ?> 
<!---- Include slider ---->
<?php include("elements/slide.php"); ?> 
<?php
		echo $_SERVER['HTTP_USER_AGENT'] ;
		echo '<br>';
?>

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
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $post['title'] ?></h3>
        </div>
        <div class="panel-body">
            <p style="text-align: justify;"><?= $post['content'] ?></p>

            <hr />
        </div>
        <div class="panel-footer">
            <p><?= $post['date'] ?></p>
        </div>
    </div>
    <?php
}   
?>

<?php include("elements/footer.php"); ?> 
