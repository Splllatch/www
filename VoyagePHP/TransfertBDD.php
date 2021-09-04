<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
 
		try{
			
			$dbco = new PDO ('mysql:host=localhost;dbname=test','root', '');
			   //On définit le mode d'erreur de PDO sur Exception
			   $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   echo 'connecté';


			   $sth = $dbco->prepare("
			   INSERT INTO testtable(  etape, ville1, ville2, typeTransport, duree, unite, 
			   coutBillet, coutPays, listeActivitees1, listeActivitees2, listeActivitees3, coutActivitees, listeVisa1, listeVisa2, listeVisa3, 
			   coutVisa, pays, detailAchat, detailEtape)
			   VALUES (  :etape, :ville1, :ville2, :typeTransport, :duree, :unite, 
			   :coutBillet, :coutPays, :listeActivitees1, :listeActivitees2, :listeActivitees3, :coutActivitees, :listeVisa1, :listeVisa2, :listeVisa3, 
			   :coutVisa, :pays, :detailAchat, :detailEtape)  ");

		   $sth->execute(array(
				
				':etape' =>	$_POST['etape'],
				':ville1' => $_POST['ville1'], 
				':ville2' => (empty($ville2) ? '' : $_POST['ville2'] ),
				':typeTransport' =>	(empty($typeTransport) ? '' : $_POST['typeTransport']), 
				':duree' =>	$_POST['duree'], 
				':unite' =>	$_POST['unite'], 
				':coutBillet' => (empty($coutBillet) ? 0 : $_POST['coutBillet']), 
				':coutPays' =>	(empty($coutPays) ? 0 : $_POST['coutPays']), 
				':listeActivitees1' => (empty($listeActivitees1) ? '' : $_POST['listeActivitees1']),
				':listeActivitees2' => (empty($listeActivitees2) ? '' : $_POST['listeActivitees2']), 
				':listeActivitees3' => (empty($listeActivitees3) ? '' : $_POST['listeActivitees3']), 
				':coutActivitees' => (empty($coutActivitees) ? 0 : $_POST['coutActivitees']),
				':listeVisa1' => (empty($listeVisa1) ? '' : $_POST['listeVisa1']), 
				':listeVisa2' => (empty($listeVisa2) ? '' : $_POST['listeVisa2']),
				':listeVisa3' => $listeVisa3 = (empty($listeVisa3) ? '' : $_POST['listeVisa3']),
				':coutVisa' => (empty($coutVisa) ? 0 : $_POST['coutVisa']), 
				':pays' => (empty($pays) ? '' : $_POST['pays']),
				':detailAchat' => (empty($detailAchat) ? '' : $_POST['detailAchat']),
				':detailEtape' => (empty($detailEtape) ? '' : $_POST['detailEtape'])));

		   echo "Entrée ajoutée dans la table";


		   }

		               /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
				echo "Erreur : " . $e->getMessage();
			  }
		
		?>

			<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>
	</body> 
</html>