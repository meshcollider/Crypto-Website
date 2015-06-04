<?php
function get_header($title = null) {
?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<meta content="Crypto, Crypto Group, OMC, Omnicoin, Bitcoin, BTC, Faucet, Exchange" name="keywords">
			
			<title><?php echo $title; ?> - Crypto Group</title>
			
			<link href="../css/style.css" rel="stylesheet">
			<link href="../css/bootstrap.min.css" rel="stylesheet">
			
			<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
			<link rel="icon" href="../favicon.ico" type="image/x-icon">
			
			<script src="../js/script.js"></script>
			<script src="/theme/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="navbar navbar-inverse navbar-top">
        <div class="container-fluid">
        <a href="index.php"><headbtn>Home</headbtn></a>
          <branding>
            <a href="index.php"><img src="../img/logo.png"></a>
          </branding>
          <a href="login.php"><headbtn>Member Login</headbtn></a>
        </div>
			</div>
			<div class="page-header">
				<div class="container">
					<h2><?php echo $title; ?></h2>
				</div>
			</div>
<?php
}
?>
