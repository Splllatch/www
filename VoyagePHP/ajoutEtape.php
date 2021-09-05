
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>

		<h1>Ajouter une étape :</h1>
		<form method="post" action="TransfertBDD.php">

			 <input type="radio" name="etape" value="transport" />Transport<br>
			 <input type="radio" name="etape" value="ville" />Ville<br>		
			 

			 

			<label >Ville départ</label> <input type="text"  name="ville1" >
			<label>Ville arrivée</label> <input type="text" name="ville2">
			<label>Type de transport</label> <input type="text" name="typeTransport">
			<label>Temps</label> <input type="text" name="duree">
			<label>Unité (jours ou heures)<br></label> 
			<input type="radio" name="unite" value="jours" />jours<br>
			<input type="radio" name="unite" value="heures" />heures<br>


			<label>Cout du billet</label> <input type="text" name="coutBillet">
			<label>Cout journalier du pays</label> <input type="text" name="coutPays">
			<label>Activitée 1</label> <input type="text" name="listeActivitees1">
			<label>Activitée 2</label> <input type="text" name="listeActivitees2">
			<label>Activitée 3</label> <input type="text" name="listeActivitees3">
			<label>Cout des activitées</label> <input type="text" name="coutActivitees">
			<label>Visa 1</label> <input type="text" name="listeVisa1">
			<label>Visa 2</label> <input type="text" name="listeVisa2">
			<label>Visa 3</label> <input type="text" name="listeVisa3">
			<label>Cout des visa</label> <input type="text" name="coutVisa">
			<label>Pays</label> <input type="text" name="pays">
			<label>Détails achat billet</label> <input type="text" name="detailAchat">
			<label>Détails de l'étape</label> <input type="text" name="detailEtape">

			<input type="submit" value="Ajouter" >

			
		</form>
	</body> 
</html>

