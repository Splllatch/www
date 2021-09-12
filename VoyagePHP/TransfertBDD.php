<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

	$dureeConvert = $_POST['duree'];
	$unite = $_POST['unite'];

	if ($unite == 'heures')
	{
		$dureeConvert = $dureeConvert / 24;
	}


 
		try{
			
			$dbco = new PDO ('mysql:host=localhost;dbname=test','root', '');
			   //On définit le mode d'erreur de PDO sur Exception
			   $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			   $sth = $dbco->prepare("
			   INSERT INTO testtable(  etape, ville1, ville2, typeTransport, duree, dureeConvert, unite, 
			   coutBillet, coutPays, listeActivitees1, listeActivitees2, listeActivitees3, coutActivitees, listeVisa1, listeVisa2, listeVisa3, 
			   coutVisa, pays, detailAchat, detailEtape)
			   VALUES (  :etape, :ville1, :ville2, :typeTransport, :duree, :dureeConvert, :unite, 
			   :coutBillet, :coutPays, :listeActivitees1, :listeActivitees2, :listeActivitees3, :coutActivitees, :listeVisa1, :listeVisa2, :listeVisa3, 
			   :coutVisa, :pays, :detailAchat, :detailEtape)  ");

		   $sth->execute(array(
				
				':etape' =>	$_POST['etape'],
				':ville1' => $_POST['ville1'], 
				':ville2' =>  $_POST['ville2'],
				':typeTransport' => $_POST['typeTransport'], 
				':duree' =>	$_POST['duree'], 
				':dureeConvert' =>	$dureeConvert,
				':unite' =>	$_POST['unite'], 
				':coutBillet' =>  $_POST['coutBillet'], 
				':coutPays' =>	 $_POST['coutPays'], 
				':listeActivitees1' => $_POST['listeActivitees1'],
				':listeActivitees2' => $_POST['listeActivitees2'], 
				':listeActivitees3' =>  $_POST['listeActivitees3'], 
				':coutActivitees' =>  $_POST['coutActivitees'],
				':listeVisa1' =>  $_POST['listeVisa1'], 
				':listeVisa2' =>  $_POST['listeVisa2'],
				':listeVisa3' =>  $_POST['listeVisa3'],
				':coutVisa' =>  $_POST['coutVisa'], 
				':pays' =>  $_POST['pays'],
				':detailAchat' =>  $_POST['detailAchat'],
				':detailEtape' =>  $_POST['detailEtape']));

		   echo "Entrée ajoutée dans la table"  ;


		   }

		               /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
				echo "Erreur : " . $e->getMessage();
			  }
		
		?>

			<input  class="retour" type="button" value="Retour" onClick="window.location.href='Voyage.php'"/>
	</body> 
</html>