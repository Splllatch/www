<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
<<<<<<< HEAD


		$id = $_POST['id'] ;
		$pays = $_POST['pays'] ;
		$ville1 = $_POST['ville1'] ;
		$ville2 = $_POST['ville2'] ;
		$typeTransport = $_POST['typeTransport'] ;
		$duree = $_POST['duree'] ;
		$unite = $_POST['unite'] ;
		$coutBillet = $_POST['coutBillet'] ;
		$detailAchat = $_POST['detailAchat'] ;
		$listeVisa1 = $_POST['listeVisa1'] ;
		$listeVisa2 = $_POST['listeVisa2'] ;
		$listeVisa3 = $_POST['listeVisa3'] ;
		$coutVisa = $_POST['coutVisa'] ;
		$listeActivitees1 = $_POST['listeActivitees1'] ;
		$listeActivitees2 = $_POST['listeActivitees2'] ;
		$listeActivitees3 = $_POST['listeActivitees3'] ;
		$coutActivitees = $_POST['coutActivitees'] ;
		$coutPays = $_POST['coutPays'] ;
		$detailEtape = $_POST['detailEtape'] ;

		

=======
>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
 
		try{
			
			$dbco = new PDO ('mysql:host=localhost;dbname=test','root', '');
<<<<<<< HEAD
			   
			   $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			   $sth = $dbco->prepare("
			   UPDATE testtable 
			   SET pays='$pays' , ville1='$ville1' , duree='$duree' , unite='$unite' , listeActivitees1='$listeActivitees1' , listeActivitees2='$listeActivitees2'  ,
			   listeActivitees3='$listeActivitees3' , coutActivitees='$coutActivitees' , coutPays='$coutPays' , detailEtape='$detailEtape' , ville2='$ville2' 
			   , typeTransport='$typeTransport' , coutBillet='$coutBillet' , detailAchat='$detailAchat' , listeVisa1='$listeVisa1' , listeVisa2='$listeVisa2' , listeVisa3='$listeVisa3' , coutVisa='$coutVisa'
			   WHERE id='$id'
			   ");

			   $sth->execute();

		   		echo "Table mise à jour"  ;

				 }
						 

		   

		               /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            	catch(PDOException $e){
=======
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
				':ville2' =>  $_POST['ville2'],
				':typeTransport' => $_POST['typeTransport'], 
				':duree' =>	$_POST['duree'], 
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
>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
				echo "Erreur : " . $e->getMessage();
			  }
		
		?>

<<<<<<< HEAD
			<input  class="Retour" type="button" value="Retour" onClick="window.location.href='Voyage.php'"/>
=======
			<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>
>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
	</body> 
</html>