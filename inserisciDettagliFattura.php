<HTML>
<HEAD>
   <TITLE>Visualizza</TITLE>
</HEAD>

<BODY>

 <?php
	
			$idbill = $_POST['id'];
			$description = $_POST['descrizione'];
			$quantity = $_POST['quantita'];
			$amount = $_POST['ammontare'];
			$iva = $_POST['iva'];

			$importoivacalcolato = ($amount * $iva )/100;
	        $totaleiva = $amount + $importoivacalcolato;
   

   $mysqli = new mysqli("localhost", "root", "", "bill");
			
			$sql = "INSERT INTO linebill (idbill, description, quantity,amount,amountiva,totowhitiva)
          VALUES ('". $idbill . "', '". $description."', '" . $quantity ."', '" . $amount ."', '" . $importoivacalcolato . "', '" . $totaleiva ."')";	
			
			$mysqli->query($sql);
			
			$mysqli->close();
			echo "Dettagli Fattura Inserita <br>IdFattura: " . $idbill . "<br>Descrizione Fattura: " . $description . "<br>Quantita " . $quantity . "<br>";

			echo "Importo iva: " . $importoivacalcolato . "€<br>Totale con l'iva " . $totaleiva . "€";
    
   ?>
   <br><br><a href="VisualizzaDettagliFattura.html">visualizza
   
 </BODY>
</HTML>
	