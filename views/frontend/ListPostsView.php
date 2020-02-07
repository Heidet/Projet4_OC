
<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); 
while ($data = $posts->fetch()) { 
    /**echo "<h1>" . $post['title'] . "</h1>";
    echo "<p>" . $post['content'] . "</p>";
    echo "<p>" . $post['date'] . "</p>";
    echo "<hr />"; **/
    ?>
        <div class="container">
            <div class="row">
                <div class="card mb-4">

                    <div class="card-body">
                        <h2 class="card-title"><?= htmlspecialchars($data['title']) ?></h2>
                        <p class="card-text"><?= htmlspecialchars($data['content']) ?></p>
                        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-primary">Lire plus &rarr;</a> <!-- Transmition ID post par URL -->
                    </div>
                    <div class="card-footer text-muted"><?= $data['date'] ?></div>
                </div>
            </div>
        </div>
    <?php
}   
?>
<?php $contentPage = ob_get_clean(); ?>
<?php require('template.php'); ?>
