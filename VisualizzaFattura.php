<HTML>
<HEAD>
   <TITLE>Visualizza</TITLE>
</HEAD>

<BODY>
<table border="2">
	
	<?php
	$mysqli = new mysqli("localhost", "root", "", "bill");
	
	$sql = "SELECT * FROM bill";
	
	$result = $mysqli->query($sql);
	echo "<tr><td>Data Fattura</td><td>Numero Fattura</td><td>Id Cliente</td></tr>";
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
		echo "<tr><td>".$row["databill"]. "</td><td>".$row["billnumber"]."</td><td>".$row["idclient"]."</td></tr>";	
    }
	} else {
    echo "0 results";
	}
	$mysqli->close();
	

	
	?>
	<br><a href="index.html">Indietro</a>
	
</table>

</BODY>
</HTML>
	