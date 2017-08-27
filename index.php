<?php 

require_once 'login.inc.php';

if (LOGGEDIN && !isset($_GET['level'])) {
	include 'listing.inc.php';
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CS4G Network Simulator</title>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<style type="text/css">
		* {	font-family: Arial, Helvetica, sans-serif; }
		body { margin: 0; overflow:hidden; }
	</style>

</head>
<body>
	
	<script>
		<?php include 'phaser.inc.php'; ?>
	</script>

	<div id="game" style="float:left"></div>

	<div id="pane" style="position:absolute"></div>
</body>
</html>