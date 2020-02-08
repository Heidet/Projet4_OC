<?php ob_start(); ?>
    <div class="container mt-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>DashBoard <b>Administrateur</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="CreatePostView.php" class="btn btn-success mb-3" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un article</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger mb-3" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
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
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?= htmlspecialchars($data['title']) ?></td>
                                <td><?= htmlspecialchars($data['content']) ?></td>
                                <td><?= $data['date'] ?></td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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