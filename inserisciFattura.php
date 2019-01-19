<HTML>
<HEAD>
   <TITLE>Inserimento</TITLE>
</HEAD>

<BODY>	
	<?php
			$dataFattura = $_POST['dateBill'];
			$numeroFattura = $_POST['billNumber'];
			$idCliente = $_POST['clientId'];
			
			$mysqli = new mysqli("localhost", "root", "", "bill");
			
			$sql = "INSERT INTO bill (dataBill, billNumber, idclient)
VALUES ('". $dataFattura . "', '". $numeroFattura ."', '" . $idCliente . "')";	
			
			$mysqli->query($sql);
			
			$mysqli->close();
			
			echo "Fattura Inserita <br>Data Fattura: " . $dataFattura . "<br>Numero Fattura: " . $numeroFattura . "<br>Id Cliente " . $idCliente . "<br><br>";
	?>
	
	  <form action="index.html">
         <button type="submit">Ok</button>
		 <a href="Index.html">Indietro</a>
      </form>
	
</BODY>
</HTML>
	