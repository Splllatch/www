<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" type="text/css" href="voyage.css">
    


</head>
<body>

<?php $bdd = new PDO('mysql:host=localhost;dbname=test','root', ''); 

    $etape;
    $ville1; 
    $ville2;
    $duree;
    $typeTransport;
    $coutBillet;
    $coutPays;



    $reponse = $bdd->query('SELECT * FROM testtable');
    while ($donnees = $reponse->fetch())
    {
        $etape = $donnees['etape'];
        $ville1 = $donnees['ville1']; 
        $ville2 = $donnees['ville2'];
        $duree = $donnees['duree'];
        $typeTransport = $donnees['typeTransport'];
        $coutBillet = $donnees['coutBillet'];
        $coutPays = $donnees['coutPays'];

    }
?>

<?php include 'transport.php'; ?>
<?php include 'ville.php'; ?>
<?php include 'transport.php'; ?>






</body>
</html>

