<section class="ville" class="etape"> 				
			<div class=sectionVille> 
				<div class="titreVille">
					Ville n° <div class="nbEtape"></div>
				</div>
				<div><?php echo '<p>' . $ville1 . '</p>' ;  ?></div>
			</div>
				<div class="info">
					<div class="tempsVille">
						<div class="titre">Temps sur place</div>
						<input class="tempsEtape jour" value="<?php echo  $duree  ;  ?>">jours </input>
					</div>
					<div class="activiteVille">
						<div class="titre">Activitées</div>
						<div class="donneesVille2">
							<li>Place rouge </li>
							<li>Prendre le thé avec Vladimir</li>
							<li></li>
							<li>Total  <input  class="cout1" value="50" >€</input></li>
						</div>
					</div>
					<section class="nourriture">
						<div class="titre">Nourriture</div>
						<div>
							<input  class="coutJour" value="<?php echo  $coutPays ;  ?>" >€ par jour</input>
							</br>
							<div class="total">
							</br> Total
							<input  class="cout2"  >€</input>
							</div>
						</div>
					</section>
					<div class="detailVille">
						<div class="titre">Détails</div>
						<div class="donneesVille2"> Trois jous sur place, une visite ou deux par jour </div>
						<input  class="cout3" value="0" >€</input>
					</div>					
					<div class="recapVille">
						<div class="titre">Cumul des trucs</div>
						<li>Cout étape : <block class="coutEtape"></block>€</li>
						<li>Cumul des dépenses : <block class="cumulDepense"></block>€</li>
						<li>Temps passé depuis le départ : <block class="tempsCumul" ></block> jours</li>
						<li>Kilomètre parcouru : <block class="distanceCumul" ></block> km</li>
					</div>
				</div>
				<section class="paysVille">
					<div class="t11" >
						<div  class="titrePays">Pays</div> 
						<div class="donneesTransport">Russie</div> 
					</div>
				</section>
			</section>