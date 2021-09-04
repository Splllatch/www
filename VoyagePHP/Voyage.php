<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" type="text/css" href="voyagePHP.css">
    


</head>
<body>

<header>
    <input  class="ajoutEtape" type="button" value="Ajout Etape" onClick="window.location.href='ajoutEtape.html'"/>

</header>

<?php $bdd = new PDO('mysql:host=localhost;dbname=test','root', ''); 

    $cumulDepense = 0;
    $cumulTemps = 0;
    $cumulDistance = 0;
    $nbTransport = 1;
    $nbVille = 1;


    $reponse = $bdd->query('SELECT * FROM testtable ORDER BY testtable . id');
    while ($donnees = $reponse->fetch())
    {
            $id = $donnees['id'];
            $etape = $donnees['etape'];
            $ville1 = $donnees['ville1']; 
            $ville2 = $donnees['ville2'];
            $typeTransport =$donnees['typeTransport'];
            $duree = $donnees['duree'];
            $unite = $donnees['unite']; 
            $coutBillet = $donnees['coutBillet'];
            $coutPays = $donnees['coutPays'];
            $listeActivitees1 = $donnees['listeActivitees1'];
            $listeActivitees2 = $donnees['listeActivitees2'];
            $listeActivitees3 = $donnees['listeActivitees3'];
            $coutActivitees = $donnees['coutActivitees'];
            $listeVisa1 = $donnees['listeVisa1'];
            $listeVisa2 = $donnees['listeVisa2'];
            $listeVisa3 = $donnees['listeVisa3'];
            $coutVisa = $donnees['coutVisa'];
            $pays = $donnees['pays'];
            $detailAchat = $donnees['detailAchat'];
            $detailEtape = $donnees['detailEtape'];
            $coutNourriture = $coutPays * $duree;
            $coutEtape = $coutBillet + $coutNourriture + $coutVisa  ;
            $cumulDepense = $cumulDepense + $coutEtape;
            $cumulTemps = 0;
            $cumulDistance = 0;


            if ($etape == 'transport')
                {
                include 'transport.php'; 
                $nbTransport = $nbTransport + 1;
                }
            
            else  
            {
                include 'ville.php';
                $nbVille = $nbVille + 1;
            }

    }
?>












</body>
</html>

