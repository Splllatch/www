<<<<<<< HEAD
=======

>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"  href="CSS/ajoutEtape.css">
<<<<<<< HEAD
		<script src="JS/modifEtape.js" defer></script>
	</head>
	<body>
	<?php 
//avec ISSET
//Si la variable $_POST['truc'] existe, alors $truc = $_POST['truc']  sinon elle vaut NULL 
$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$etape = isset($_POST['etape']) ? $_POST['etape'] : NULL;
$ville1 = isset($_POST['ville1']) ? $_POST['ville1'] : NULL;
$ville2 = isset($_POST['ville2']) ? $_POST['ville2'] : NULL;
$typeTransport = isset($_POST['typeTransport']) ? $_POST['typeTransport'] : NULL;
$duree = isset($_POST['duree']) ? $_POST['duree'] : NULL;
$unite = isset($_POST['unite']) ? $_POST['unite'] : NULL;
$coutBillet = isset($_POST['coutBillet']) ? $_POST['coutBillet'] : 0;
$detailAchat = isset($_POST['detailAchat']) ? $_POST['detailAchat'] : NULL;
$listeVisa1 = isset($_POST['listeVisa1']) ? $_POST['listeVisa1'] : NULL;
$listeVisa2 = isset($_POST['listeVisa2']) ? $_POST['listeVisa2'] : NULL;
$listeVisa3 = isset($_POST['listeVisa3']) ? $_POST['listeVisa3'] : NULL;
$coutVisa = isset($_POST['coutVisa']) ? $_POST['coutVisa'] : 0;
$listeActivitees1 = isset($_POST['listeActivitees1']) ? $_POST['listeActivitees1'] : NULL;
$listeActivitees2 = isset($_POST['listeActivitees2']) ? $_POST['listeActivitees2'] : NULL;
$listeActivitees3 = isset($_POST['listeActivitees3']) ? $_POST['listeActivitees3'] : NULL;
$coutActivitees = isset($_POST['coutActivitees']) ? $_POST['coutActivitees'] : 0;
$coutPays = isset($_POST['coutPays']) ? $_POST['coutPays'] : 0;
$detailEtape = isset($_POST['detailEtape']) ? $_POST['detailEtape'] : NULL;
$pays = isset($_POST['pays']) ? $_POST['pays'] : NULL;

?>

		<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>

		<h1>Modifier une étape :</h1>
		<form method="post" action="ModifBDD.php">


			<input name="id" value="<?php echo $id ?>" type="hidden">
			 <input id="transport" type="radio" name="etape" value="transport" <?php if ($etape == 'transport') { echo 'checked="checked"';};?> />Transport<br>
			 <input id="ville" type="radio" name="etape" value="ville" <?php if ($etape == 'ville') { echo 'checked="checked"';};?>/>Ville<br>		
			 

			<div class=trajet>
				<div  id="ville1">
				<label >Ville de départ :</label> </br> <input type="text"  name="ville1" class="caseVille" value="<?php echo $ville1; ?>">
				</div>

				<img id="iconeTrajet" src="trajet.png">

				<div class="transport" id="ville2">
				<label>Ville d'arrivée : </label> <input type="text" name="ville2" class="caseVille" value="<?php echo $ville2; ?>">
				</div>
			</div>	


			
			<div class="transport" id="typeTransport">
			<label>Type de transport</label> 
				<select name="typeTransport" class="caseTransport">
					<option  value="Train">Train</option>
					<option  value="Bus">Bus</option>
					<option  value="Avion">Avion</option>
					<option  value="Bateau">Bateau</option>
					<option  value="Taxi">Taxi</option>
				</select>

			</div>
			</div>
			
			<div  id="duree">
			<label>Temps</label> <input type="text" name="duree" id="caseDuree" value="<?php echo $duree; ?>" >
			 
			

			<input type="radio" name="unite" value="jours" <?php if ($unite == 'jours') { echo 'checked="checked"';};?> />jours<br>
			<input type="radio" name="unite" value="heures" <?php if ($etape == 'heures') { echo 'checked="checked"';};?>/>heures<br>
			</div>

			<div class="transport" id="coutBillet">
			<label>Cout du billet</label> <input type="text" name="coutBillet" id="caseCoutBillet" value="<?php echo $coutBillet; ?>"><label>€</label>
			</div>

			<div class="transport" id="detailBillet">
			<label>Détails achat billet :</label> <input type="text" name="detailAchat" class="caseDetail" value="<?php echo $detailAchat; ?>">
			</div>

			<div id="sectionPays">
				<div  id="pays">
				<label>Pays :</label> <input type="text" name="pays" class="casePays" value="<?php echo $pays; ?>">
				</div>
				
				<div  id="coutPays">
				<label>Cout journalier du pays</label> <input type="text" name="coutPays" id="caseCoutPays" value="<?php echo $coutPays; ?>"><label>€</label>
				</div>
			</div>

			<div class="ville" id="activitee">
			<label>Activitée 1</label> <input type="text" name="listeActivitees1" class="listeActivitee" value="<?php echo $listeActivitees1; ?>">
			<label>Activitée 2</label> <input type="text" name="listeActivitees2" class="listeActivitee" value="<?php echo $listeActivitees2; ?>">
			<label>Activitée 3</label> <input type="text" name="listeActivitees3" class="listeActivitee" value="<?php echo $listeActivitees3; ?>">
			<label>Cout des activitées</label> <input type="text" name="coutActivitees" id="caseCoutActivitees" value="<?php echo $coutActivitees; ?>"><label>€</label>
			</div>

			<div class="transport" id="visa">
			<label>Visa 1 : </label> <input type="text" name="listeVisa1" class="listeVisa" value="<?php echo $listeVisa1; ?>">
			<label>Visa 2 : </label> <input type="text" name="listeVisa2" class="listeVisa" value="<?php echo $listeVisa2; ?>">
			<label>Visa 3 : </label> <input type="text" name="listeVisa3" class="listeVisa" value="<?php echo $listeVisa3; ?>">
			<label>Cout des visas</label> <input type="text" name="coutVisa" id="caseCoutVisa" value="<?php echo $coutVisa; ?>"><label>€</label>
			</div>





			<div  id="detailEtape">
			<label>Détails de l'étape :</label> <input type="text" name="detailEtape" class="caseDetail" value="<?php echo $detailEtape; ?>">
			</div>

			<div  id="MiseAJour">
			<input type="submit" value="Mettre à jour" >
			</div>

			
		</form>
	</body> 
</html>
=======
		<script src="JS/modifEtape.js"></script>
	</head>

	<body>
	Page de test

	<div id="TEST"></div>

	wesh


 


	</body> 
</html>

>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
