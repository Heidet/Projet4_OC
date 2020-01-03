<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Jean Forteroche</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
</head>

<body>
<!---- Include Menu ---->
<?php include("elements/menu.php"); ?> 
<!---- Include slider ---->
<?php include("elements/slide.php"); ?> 
<?php
		echo $_SERVER['HTTP_USER_AGENT'] ;
		echo '<br>';
?>

<?php include("elements/footer.php"); ?> 
</body>        