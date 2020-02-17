<?php $titre_page = "DashBoard"; ?>
<?php ob_start(); ?>
    <div class="container mt-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>DashBoard <b>Administrateur</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/?action=addPost" class="btn btn-success mb-3" ><i class="material-icons">&#xE147;</i> <span>Ajouter un article</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Contenu</th>
						<th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

            <?php while ($data = $posts->fetch()) { 
?>
                        <tbody>
                            <tr>
                                <td><?= $data['title'] ?></td>
                                <td><?= $data['content'] ?></td>
                                <td><?= $data['date'] ?></td>
                                <td>
                                    <a href="/?action=editPost&id=<?= $data['id'] ?>" class="edit" ><i class="material-icons" title="Edit" >&#xE254;</i></a>
                                    <a href="/?action=deletePost&id=<?= $data['id'] ?>" class="delete" 
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?');" ><i class="material-icons" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
}   
?>
            </table>
        </div>
    </div>
    

    <div class="container mt-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>DashBoard <b> Signalement</b></h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Commentaire</th>
                        <th>Actions</th>
                    </tr>
                </thead>

            <?php while ($data = $comments->fetch()) { 
?>
                        <tbody>
                            <tr>
                                <td><?= $data['id'] ?></td>
                                <td><?= $data['content'] ?></td>
                                <td>
                                    <a href="/?action=deleteComment&commentId=<?= $data['id'] ?>" class="delete" 
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer  ce commentaire?');" ><i class="material-icons" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
}   
?>
            </table>
        </div>
    </div>
<?php $contentPage =  ob_get_clean();?> 
<?php require('template.php')?>                          		                            