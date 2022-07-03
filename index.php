<?php
	$base_url = "http://localhost/tahsin/"
?>
<html lang="en">
	<head>
		<title>Tahsin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="fav.icon">
		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
		<link href="asset/fontawesome/css/all.css"  type="text/css" rel="stylesheet">
		<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container-fluid" style="padding: 0px;">
			<header class="sticky-top">
				<?php include("includes/menu.php"); ?>
			</header>
			<content>
				<?php include("includes/content.php"); ?>
			</content>
			<footer>
				<?php include("includes/footer.php"); ?>
			</footer>
		</div>
	</body>
</html>

