<HTML>
<HEAD>
   <TITLE>BillingService</TITLE>
</HEAD>

<BODY>
<table border="2">
<?php
   
	$mysqli = new mysqli("localhost", "root", "", "bill");
	
	$sql = "SELECT * FROM linebill";
	
	$result = $mysqli->query($sql);
	echo "<tr><td>idfattura</td><td>descrizione</td><td>quantita</td><td>ammontare</td><td>ammontare iva</td><td>totale con iva</td></tr>";
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
		echo "<tr><td>".$row["id"]. 
		     "</td><td>".$row["description"].
			 "</td><td>".$row["quantity"].
			 "</td><td>".$row["amount"].
			 "</td><td>".$row["amountiva"].
			 "</td><td>".$row["totowhitiva"].
			 "</td><tr>";	
    }
	} else {
    echo "0 results";
	}
	$mysqli->close();
	?>
   
</table>	
	
</BODY>
</HTML>