<?php
	class outbound{
		function __construct(){
			global $db;
			$qry = $db->query('SELECT * FROM aircraft;');
			echo "<h2> Outbound Flights </h2>";
			echo "<table>";
			echo "<tr><td><b> tail number </b></td><td><b> craft type </b></td><td><b> fuel </b></td></tr><td><b> pilot </b></td>";
			while($value = $qry->fetch(PDO::FETCH_BOTH)){
				echo "<tr><td> $value[0] </td><td> $value[1] </td><td> $value[2] </td><td> $value[3] </td></tr>";
			}
			echo "</table>";
		}
	}
	class inbound{
		function __construct(){
			global $db;
			$qry = $db->query('SELECT * FROM aircrew;');
			echo "<h2>Inbound Flights</h2>";
			echo "<table>";
			echo "<tr><td><b> Pilot </b></td><td><b> Navigator </b></td></tr>";
			while($value = $qry->fetch(PDO::FETCH_BOTH)){
				echo "<tr><td> $value[0] </td><td> $value[1] </td></tr>";
			}
			echo "</table>";
		}
	}
	class cargo{
		function __construct(){
			global $db;
			$qry = $db->query('SELECT * FROM aircrew;');
			echo "<h2>Cargo</h2>";
			echo "<table>";
			echo "<tr><td><b> Pilot </b></td><td><b> Navigator </b></td></tr>";
			while($value = $qry->fetch(PDO::FETCH_BOTH)){
				echo "<tr><td> $value[0] </td><td> $value[1] </td></tr>";
			}
			echo "</table>";
		}
	}
?>