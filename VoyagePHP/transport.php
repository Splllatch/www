<section class="transport">						
			<section class=numeroTransport class="etape"> 
				Transport n°  <?php echo  $nbTransport  ;  ?>
			</section>
			<section class="detail">
				<img src="Paris-Moscou.png" class="imgTransport">
				<section class="données" >
					<section class="detail1" class="etape"> 
						<div class="titre">Test Trajet</div>
						<li><?php echo  $ville1  ;  ?>	
                            <img class="iconeTrajet" src="trajet.png"> 	<?php echo $ville2  ;  ?> </li>						
						<li><?php echo  $typeTransport ;  ?> </li>
						<li><?php echo  $duree . ' ' . $unite;  ?></li>
						<li> <?php echo  $coutBillet ;  ?>€ le billet</input></li>
					</section>
					<section class="nourriture">
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
			</section>
			<div>
				
				<section class="pays">
					<div class="t11" >					
						<div  class="titrePays">Pays</div> 
						<div class="donneesTransport"><?php echo  $pays ;  ?></div> 
						<input  class="modifeEtape" type="button" value="Modifier" onClick="window.location.href='modifEtape.php'"/>
					</div>
				</section>
			</div>
		</section>