<head>
<link rel="stylesheet"  href="CSS/transport.css">
</head>



<section class="transport">						
			<div class=numeroTransport class="etape"> 
				Transport n°  <?php echo  $nbTransport  ;  ?>
			</div>

			<div class="detail">
				<img src="Paris-Moscou.png" class="imgTransport">

				<section class="infoTransport" >

					<section class="detailTransport" class="etape"> 
						<div class="titre">Test Trajet</div>
						<li class="ville1">  <?php echo  $ville1  ;  ?>	
                            <img class="iconeTrajet" src="trajet.png"> 	<?php echo $ville2  ;  ?> </li>						
						<li><?php echo  $typeTransport ;  ?> </li>
						<li><?php echo  $duree . ' ' . $unite;  ?></li>
						<li> <?php echo  $coutBillet ;  ?>€ le billet</input></li>
					</section>

					<section class="nourritureTransport">
						<div class="titre">Nourriture</div>
						<div>
							<input  class="coutJour" value="<?php echo  $coutPays ;  ?>" >€ par jour</input>
							</br>
							<div class="total">
							</br> Total
							<?php echo  $coutNourriture . ' €'; ?>
							</div>
						</div>
					</section>

					<section class="achatBillet">
						<div class="titre">Ou acheter le billet ?</div>
						<div><?php echo  $detailAchat;  ?></div>
					</section>

					<div class="visa">
						<div class="titre">Visa</div>
						<div class="donneesTransport2" >
							<li><?php echo  $listeVisa1;  ?></li>
							<li><?php echo  $listeVisa2;  ?></li>
							<li><?php echo  $listeVisa3;  ?></li>
							<li>Total visa = <?php echo  $coutVisa;  ?>€</li>
						</div>		
					</div>

					<div class="recap">
						<div class="titre">Cumul des trucs</div>
						<li>Cout étape : <?php echo  $coutEtape?>€</li>
						<li>Cumul des dépenses : <?php echo  $cumulDepense?>€</li>
						<li>Temps passé depuis le départ : <?php echo  $cumulTemps?> jours</li>
						<li>Kilomètre parcouru : <?php echo  $cumulDistance?> km</li>
					</div>

				</section>

				<section class="detailTransport">
					<div class="titre">Détails</div>
					<div class="donneesTransport2" ><?php echo  $detailEtape ;  ?></div>
				</section>
			</div>

			
				
				<section class="paysTransport">					
						<div  class="titrePays">Pays</div> 
						<div class="donneesTransport"><?php echo  $pays ;  ?></div> 
				</section>

				<section class="boutonTransport">
					<form method="post" action="modifEtape.php">
						<input name="id" value="<?php echo $id ?>" type="hidden">
						<input name="etape" value="<?php echo $etape ?>" type="hidden">
						<input name="ville1" value="<?php echo $ville1 ?>" type="hidden">
						<input name="ville2" value="<?php echo $ville2 ?>" type="hidden">
						<input name="typeTransport" value="<?php echo $typeTransport ?>" type="hidden">
						<input name="duree" value="<?php echo $duree ?>" type="hidden">
						<input name="unite" value="<?php echo $unite ?>" type="hidden">
						<input name="coutBillet" value="<?php echo $coutBillet ?>" type="hidden">
						<input name="detailAchat" value="<?php echo $detailAchat ?>" type="hidden">
						<input name="listeVisa1" value="<?php echo $listeVisa1 ?>"  type="hidden">
						<input name="listeVisa2" value="<?php echo $listeVisa2 ?>"  type="hidden">
						<input name="listeVisa3" value="<?php echo $listeVisa3 ?>"  type="hidden">
						<input name="coutVisa" value="<?php echo $coutVisa ?>"  type="hidden">
						<input name="listeActivitees1" value="<?php echo $listeActivitees1 ?>" type="hidden">
						<input name="listeActivitees2" value="<?php echo $listeActivitees2 ?>" type="hidden">
						<input name="listeActivitees3" value="<?php echo $listeActivitees3 ?>" type="hidden">						
						<input name="coutActivitees" value="<?php echo $coutActivitees ?>" type="hidden">
						<input name="coutPays" value="<?php echo $coutPays ?>" type="hidden">
						<input name="detailEtape" value="<?php echo $detailEtape ?>" type="hidden">
						<input name="pays" value="<?php echo $pays ?>" type="hidden">

						<input class="boutonModif"  type="submit" value="Modifier" >
						</form>

						<form method="post" action="confirmer.php">
						<input name="id" value="<?php echo $id ?>" type="hidden">
						<input class="boutonSupr"  type="submit" value="Supprimer" >
						</form>
				</section>
			
		</section>




 

