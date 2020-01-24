<!---- Include Menu ---->
<?php include("elements/header.php"); ?> 


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Connexion</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="identifiant" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="mot_de_passe" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Valider" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>