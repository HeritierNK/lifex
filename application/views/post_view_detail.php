<div class="main-wrapper">
<article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
		 
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $title ?></h2>
				    <div class="meta mb-3"><span class="date">Publié <?php echo $created_at ?></span><span class="time">5 min read <?php 
				    ;?> </span><span class="badge comment "><?php echo $count; ?></span> commentaire(s)</div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href=<?php echo base_url() ?>"><img class="img-fluid" src="<?php echo base_url() ?>assets/images/blog/<?php echo $post_image ?>" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Télécharger cet article en PDF: <a href="https://made4dev.com?ref=devblog" target="_blank"><?php echo $attach_file ?></a></figcaption>
				    </figure>
				    <p><?php echo $content ?></p>
				 </div>
				 <h6>Commentaires</h6>
				 <hr>

<!-- ICI LA SECTION DES COMMENTAIRES -->
					<?php foreach($comments  as $c) : ?>

						<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">

							<p class="mb-2" id="commentaire"><?php echo $c['content']?></p>
							<footer class="blockquote-footer">
							<?php foreach($users as $user) :?>
									<?php
									if ($c['iduser'] == $user['id']) { ?>
									<span> Par : <a href=""> <b><?php echo $user['pseudo'] ?> </b></a> [ <?php  echo $c['create_at'];?>]</span>
									<?php } ?>
									<?php endforeach?>        
							</footer>

						</blockquote>

						<?php endforeach?>

<!-- ICI LA SECTION DES COMMENTAIRES// LE FORMULAIRE DE SAISIE DU COMMENTAIRE -->
					<form action="<?php echo base_url()?>comments/create/<?php echo $id ?>" method="post">
					
					<div class="form-group">
				         	<span class="alert-danger"><strong><?php  echo form_error('body');?></span></strong>
				            <textarea  type="textarea" name="body" class="form-control mr-md-1" placeholder="Ajouter un commentaire"></textarea><br>
				            <button class="btn btn-primary pull-right" type="submit">commenter</button>
				     </div>


					</form>
					 
			</div>
</article>