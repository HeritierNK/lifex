<div class="main-wrapper">
	    
		    <div class="container well py-5 text-center">
			   <h2 class="heading">La Vraie Ecole - C'est la vie elle-même</h2>
			    <div class="intro">Nous sommes convaincu que vous avez quelque chose à apprendre aux autres et des autres. Un probleme, une situation, bref une experience de la vie que vous avez passé ou constaté
			    dites nous ce que vous en pensez.
				</div>
			</div>
	  

	    <section class="cta-section theme-bg-light py-5">
		    <div class="container ">
		    	<h2 class="heading text-center" >Inscrivez-vous</h2>
			    <div class="intro text-center">Inscrit toi et partage tes connaissances avec les autres</div>
			    <br><br>
				<form  action="<?php  echo base_url()?>users/register" method="post"  >

					
				        <div class="form-group">
			                <label class=" form-group" ><strong>Prenom </label><span class="text-danger"><?php echo form_error('name') ?></span></strong>
			                <input type="text" class="form-control" name="prename" id="name" placeholder="Votre Prenom" />
			            </div>
			            <div class="form-group">
			                <label class=" "><strong> Pseudo </label><span class="text-danger"><?php echo form_error('pseudo') ?></span></strong>
			                <input type="text" class="form-control" name="pseudo" id="name" placeholder="Votre Pseudo ou Nom d'utilisateur" />
			            </div>
			             <div class="form-group">
			                <label class=" "><strong> Genre </label><span class="text-danger"><?php echo form_error('sexe') ?></span></strong>
			                <select name="sexe" class="form-control" placeholder="Femme ou Homme">
			                	<option> </option>
			                	<option value="M">Homme</option>
			                	<option value="F">Femme</option>
			                </select>
			            </div>
			            <div class="form-group">
			                <label class=" form-group"><strong> Email</label><span class="text-danger"><?php echo form_error('email') ?></span></strong>
			                <input type="email" class="form-control" name="email" id="email" placeholder="ex nom@mail.com" />
			            </div>
			            <div class="form-group">
			                <label class=" form-group"><strong> Téléphone</label><span class="text-danger"><?php echo form_error('tel') ?></span></strong>
			                <input type="phone" class="form-control" name="tel" id="tel" placeholder="ex +243 97 36 04 008" />
			            </div>
			            <div class="form-group">
			                <label class=" form-group"><strong> Mot de passe</label><span class="text-danger"><?php echo form_error('pwd') ?></span></strong>
			                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="votre mot de passe secret" />
			            </div>
			            <div class="form-group">
			                <label class=" form-group  "><strong> Confimer </label><span class="text-danger"><?php echo form_error('pwd2') ?></span></strong>
			                <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="confirmer votre mot de passe secret" />
			            </div>
				        <div class="form-group text-center">
				            <button type="submit" class="btn btn-primary" id="btn_pub">Créer un compte</button> 
				            <input type="hidden" value="0" name="iduser">
				        </div>
				        
				</form>
			</div>
		</section>
		