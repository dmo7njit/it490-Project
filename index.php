<html>
	<head>
		<title>IT490 Group A - Air Traffic Monitoring System</title>
		<link rel="stylesheet" href="style.css">
	</head>
<body>

<?php
	error_reporting(-1);
	ini_set('display_errors','On');
	
	$db = new PDO('mysql:host=sql.njit.edu;dbname=dmo7;charset=utf8','dmo7','compute23',array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
	include 'pages.php';
	
	if(isset($_GET['page'])){
		$qry = new $_GET['page'];
		
	} else {
	echo "<h1>Air Traffic Monitoring System</h1>";
	echo "<h2> IT490 Group 7 - Erik Tieleman, David O'Grady, Rob Thele, Ray Kowalski</h2>";
	echo "<h2> Select which data to view:</h2>";
	echo '<table id="list1">';
	echo '<tr><th><a href="?page=inbound">Inbound Flights</a></th></tr>';
	echo '<tr><th><a href="?page=outbound">Outbound Flights</a></th></tr>';
	echo '<tr><th><a href="?page=cargo">Cargo</a></th></tr>';
	echo "</table>";
	}
?>

</body>
</html>
