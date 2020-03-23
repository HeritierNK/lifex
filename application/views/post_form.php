<div class="main-wrapper">
	    
		    <div class="container well py-5 text-center">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>I will use this section for promotion of projetc, products etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
		    </div><!--//container-->
	  

	    <section class="cta-section theme-bg-light py-5">
		    <div class="container ">
		    	<h2 class="heading text-center">Créer un article</h2>
			    <div class="intro text-center">Ecrivez vos article dans et poster les</div>
			    <br><br>
				<?php  echo form_open_multipart('posts/create_post')?>
				        
				        <div class="form-group">
				        	<span class="alert-danger"><strong><?php  echo form_error('ptitle');?></strong></span>
				            <input type="text" id="ptitle" name="ptitle" class="form-control mr-md-1 semail" placeholder="Ajouter un titre">
				        </div>
				         <div class="form-group">
				         	<span class="alert-danger"><strong><?php  echo form_error('pcontent');?></span></strong>
				            <textarea id="editor1" type="textarea" name="pcontent" class="form-control mr-md-1" placeholder="Ecrivez ici le contenu de votre article"></textarea>
				        </div>
				        <label >Categorie</label>
		                <select class="form-control  " name="category_id"  >
		                    <?php foreach ($categories as $c):?>
		                    <option value="<?=$c['id']?>" ><?=$c['title_cat']?></option>
		                    <?php endforeach;?>
		                </select>
		                <br>
		                <div class="form-group">
		                	<span class="alert-danger"><strong><?php  echo form_error('userfile');?></span></strong>
				         	<label class="intro">Ajouter un fichier img : </label><br>
				            <input type="file"  name="userfile" size="20" >
				        </div><!--
				         <div class="form-group">
				         	<label class="intro">Ajouter un fichier PDF de votre article</label><br>
				            <input type="file" id="pfile" name="attach" size="20" >
				        </div>  
				        HERE IS THE UPLODING OF FILE PFD, LET TRY FIRTS THE RECORDING IN THE DATA BASE
				        <div class="form-group">
				            <input type="text" id="pfile" name="attach" class="form-control mr-md-1 semail" placeholder="Ajouter un fichier">
				        </div>-->
				        <div class="form-group text-center">
				            <button type="submit" class="btn btn-primary" id="btn_pub">Publier</button> 
				            <input type="hidden" value="0" name="iduser">
				        </div>
				        
				         
				        
				</form>
			</div>
		</section>
		





