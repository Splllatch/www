<section class="transport">						
			<section class=numeroTransport class="etape"> 
				Transport n°  <block class="nbTransport"></block>
			</section>
			<section class="detail">
				<img src="Paris-Moscou.png" class="imgTransport">
				<section class="données" >
					<section class="detail1" class="etape"> 
						<div class="titre">Test Trajet</div>
						<li><?php echo  $ville1  ;  ?>	
                            <img class="iconeTrajet" src="trajet.png"> 	<?php echo $ville2  ;  ?> </li>						
						<li><?php echo  $typeTransport ;  ?> </li>
						<li><input class="tempsEtape jour" value="<?php echo  $duree ;  ?>">jours</input></li>
						<li><input  class="cout1" value="<?php echo  $coutBillet ;  ?>" >€ le billet</input></li>
					</section>
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
					<section class="achatBillet">
						<div class="titre">Ou acheter le billet ?</div>
						<div>
							bla bla bla
						</div>
					</section>
					<div class="visa">
						<div class="titre">Visa</div>
						<div class="donneesTransport2" >
							<li>Invitation = 15€</li>
							<li>Visa Bielorusse = 60€</li>
							<li>Visa Russe = 65€</li>
							<li>Total visa = <input  class="cout3" value="140" >€</input></li>
						</div>		
					</div>
					<div class="recap">
						<div class="titre">Cumul des trucs</div>
						<li>Cout étape : <block class="coutEtape"></block>€</li>
						<li>Cumul des dépenses : <block class="cumulDepense"></block>€</li>
						<li>Temps passé depuis le départ : <block class="tempsCumul" ></block> jours</li>
						<li>Kilomètre parcouru : <block class="distanceCumul" ></block> km</li>
					</div>
				</section>
				<section class="detailTransport">
					<div class="titre">Détails</div>
					<div class="donneesTransport2" >Train au départ de Paris le jeudi soir. Arrivée le samedi à midi Chambre de 4 couchettes</div>
				</section>
			</section>
			<section class="pays">
				<div class="t11" >
					<div  class="titrePays">Pays</div> 
					<div class="donneesTransport">Russie</div> 
				</div>
			</section>
		</section>