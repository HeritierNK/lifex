<div class="main-wrapper">
<section class="cta-section theme-bg-light py-5">
		    <div class="container ">
		    	<h2 class="heading text-center">Créer une categorie</h2>
			    <div class="intro text-center">Ecrivez votre propre categorie</div>
			    <br><br>
			    
				<?php  echo form_open('categories/create_category')?>
				        
				        <div class="form-group">
				            <input type="text" id="ptitle" name="ctitle" class="form-control mr-md-1 semail" placeholder="Ajouter un titre">
				        </div>
				         <div class="form-group">
				            <input type="text" id="ptitle" name="resume" class="form-control mr-md-1 semail" placeholder="Ajouter une petite description">
				        </div>
				        <div class="form-group text-center">
				            <button type="submit" class="btn btn-primary" id="btn_pub">Ajouter</button> 
				            
				        </div>     
				        
				</form>

				<div class="card my-4">
		            <h5 class="card-header">Categories</h5>
		            <div class="card-body">
		              <div class="row">
		                <div class="col-lg-6">
		                  <ul class="list-unstyled mb-0">
		                  	<?php foreach($categories as $cat) : ?>
				                    <li>
				                      <a href="<?php echo base_url()?>categories/posts_by_category/<?php echo $cat['id']; ?>"><?php echo $cat['title_cat'] ; ?></a>
				                    </li>
		                    <?php endforeach ?>
		                  </ul>
		                </div>
		              </div>
		            </div>
		          </div>       
				
			</div>
		</section>

		 