

<section class="ville" class="etape"> 				
			<div class=sectionVille> 
				<div class="numeroVille">
					Ville n° <?php echo  $nbVille  ;  ?>
				</div>

				<div ><?php echo '<p>' . $ville1 . '</p>' ;  ?></div>
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
				<section class="pays">
					<div class="t11" >
						<div  class="titrePays">Pays</div> 
						<div class="donneesTransport"><?php echo  $pays ;  ?></div> 
<<<<<<< HEAD
						
						<form method="post" action="modifEtape.php">

						<input name="id" value="<?php echo $id ?>" type="hidden">
						<input name="etape" value="<?php echo $etape ?>" type="hidden">
						<input name="ville1" value="<?php echo $ville1 ?>" type="hidden">
						<input name="duree" value="<?php echo $duree ?>" type="hidden">
						<input name="unite" value="<?php echo $unite ?>" type="hidden">
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
=======
						<input  class="modifeEtape" type="button" value="Modifier" onClick="window.location.href='modifEtape.php'"/>
>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
					</div>
				</section>
			</section>


			

