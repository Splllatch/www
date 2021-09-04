<section class="ville" class="etape"> 				
			<div class=sectionVille> 
				<div class="titreVille">
					Ville n° <?php echo '<p>' . $nbVille . '</p>' ;  ?> <div class="nbEtape"></div>
				</div>
				<div><?php echo '<p>' . $ville1 . '</p>' ;  ?></div>
			</div>
				<div class="info">
					<div class="tempsVille">
						<div class="titre">Temps sur place</div>
						<?php echo  $duree . ' ' . $unite ;  ?>
					</div>
					<div class="activiteVille">
						<div class="titre">Activitées</div>
						<div class="donneesVille2">
							<li><?php echo  $listeActivitees1 ;  ?> </li>
							<li><?php echo  $listeActivitees2 ;  ?> </li>
							<li><?php echo  $listeActivitees3 ;  ?> </li>
							<li>Total  <?php echo  $coutActivitees ;  ?>€</li>
						</div>
					</div>
					<section class="nourriture">
						<div class="titre">Nourriture</div>
						<div>
							<input  class="coutJour" value="<?php echo  $coutPays ;  ?>" >€ par jour</input>
							</br>
							<div class="total">
							</br> Total
							<?php echo  $coutNourriture . ' €';  ?>
							</div>
						</div>
					</section>
					<div class="detailVille">
						<div class="titre">Détails</div>
						<div class="donneesVille2"> <?php echo  $detailEtape ;  ?></div>
						
					</div>					
					<div class="recapVille">
						<div class="titre">Cumul des trucs</div>
						<li>Cout étape :  <?php echo  $coutEtape?>€</li>
						<li>Cumul des dépenses : <?php echo  $cumulDepense?>€</li>
						<li>Temps passé depuis le départ : <?php echo  $cumulTemps?> jours</li>
						<li>Kilomètre parcouru : <?php echo  $cumulDistance?> km</li>
					</div>
				</div>
				<section class="paysVille">
					<div class="t11" >
						<div  class="titrePays">Pays</div> 
						<div class="donneesTransport"><?php echo  $pays ;  ?></div> 
					</div>
				</section>
			</section>