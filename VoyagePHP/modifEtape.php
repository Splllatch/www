
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"  href="CSS/ajoutEtape.css">
		<script src="JS/ajoutEtape.js" defer></script>
	</head>

	<?php $bdd = new PDO('mysql:host=localhost;dbname=test','root', ''); 

$cumulDepense = 0;
$cumulTemps = 0;
$cumulDistance = 0;
$nbTransport = 1;
$nbVille = 1;






$requete = "select * from testtable";
$valeurs = array();
while ($ligne = $results->fetch())
{
  $valeurs[$ligne['id']] = $ligne['ville1'];
}
 
echo $valeurs[2];

?>



	<body>

		<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>

		<h1>Ajouter une étape :</h1>
		<form method="post" action="modifBDD.php">

			 <input id="transport" type="radio" name="etape" value="transport" />Transport<br>
			 <input id="ville" type="radio" name="etape" value="ville" />Ville<br>		
			 

			<div class=trajet>
				<div  id="ville1">
				<label >Ville de départ :</label> </br> <input type="text"  name="ville1" class="caseVille" value=<?php $ville1 ; ?>>
				</div>

				<img id="iconeTrajet" src="trajet.png">

				<div class="transport" id="ville2">
				<label>Ville d'arrivée : </label> <input type="text" name="ville2" class="caseVille" value="">
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
			<label>Temps</label> <input type="text" name="duree" id="caseDuree" value= 0 >
			 
			

			<input type="radio" name="unite" value="jours" checked="checked" />jours<br>
			<input type="radio" name="unite" value="heures" />heures<br>
			</div>

			<div class="transport" id="coutBillet">
			<label>Cout du billet</label> <input type="text" name="coutBillet" id="caseCoutBillet" value=0><label>€</label>
			</div>

			<div class="transport" id="detailBillet">
			<label>Détails achat billet :</label> <input type="text" name="detailAchat" class="caseDetail" value="">
			</div>

			<div id="sectionPays">
				<div  id="pays">
				<label>Pays :</label> <input type="text" name="pays" class="casePays" value="">
				</div>
				
				<div  id="coutPays">
				<label>Cout journalier du pays</label> <input type="text" name="coutPays" id="caseCoutPays" value=0><label>€</label>
				</div>
			</div>

			<div class="ville" id="activitee">
			<label>Activitée 1</label> <input type="text" name="listeActivitees1" class="listeActivitee" value="">
			<label>Activitée 2</label> <input type="text" name="listeActivitees2" class="listeActivitee" value="">
			<label>Activitée 3</label> <input type="text" name="listeActivitees3" class="listeActivitee" value="">
			<label>Cout des activitées</label> <input type="text" name="coutActivitees" id="caseCoutActivitees" value=0><label>€</label>
			</div>

			<div class="transport" id="visa">
			<label>Visa 1 : </label> <input type="text" name="listeVisa1" class="listeVisa" value="">
			<label>Visa 2 : </label> <input type="text" name="listeVisa2" class="listeVisa" value="">
			<label>Visa 3 : </label> <input type="text" name="listeVisa3" class="listeVisa" value="">
			<label>Cout des visas</label> <input type="text" name="coutVisa" id="caseCoutVisa" value= '0'><label>€</label>
			</div>





			<div  id="detailEtape">
			<label>Détails de l'étape :</label> <input type="text" name="detailEtape" class="caseDetail" value="">
			</div>

			<div  id="ajouter">
			<input type="submit" value="Mettre à jour" >
			</div>

			
		</form>
	</body> 
</html>

