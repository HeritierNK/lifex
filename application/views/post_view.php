<div class="main-wrapper">
	    
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	
		    	<?php foreach($posts  as $post) : ?>
					    <div class="item mb-5">
						    <div class="media">
						    	

							    <img class="mr-3 img-fluid post-thumb d-none d-md-flex " src="<?php echo base_url()?>assets/images/blog/<?php echo $post['post_image'] ?>" alt="image post" />
								    <div class="media-body">
									    <h3 class="title mb-1"><a href="blog-post.html"></a><?php echo $post['title']?></a></h3>
										<div class="meta mb-1"><span class="date"> <?php echo "Publié " .$post['created_at']?>
										    <!--<span class="date"><strong><?php //echo "Par [" ?><a href="<?php// echo base_url()?>users/posts_by_user/<?php// echo $post['userid'];?>"><?php // echo $post['pseudo']."]";?> </a></strong></span></span>-->
										    <span class="time">5 min read </span>
										    <span class="time">
										    	<?php foreach($users as $user) :?>
										    	<?php
										    	if ($post['iduser'] == $user['id']) { ?>
										    		
										    		<span> Par : <a href=""> <b><?php echo $user['pseudo'] ?> </b></a></span>
										    		
										    	<?php } ?>
										    		
										    
										    	<?php endforeach?>
										    </span>
										    <span class="badge comment">4 commentaires(s)</span>
										</div>
									    <div class="intro"><?php echo word_limiter($post['content'],50)?></div>
									    <a class="more-link lireplus" href="<?php echo base_url()?>posts/read_post/<?php echo $post['id'] ?>">LIRE TOUT &rarr;</a>
								    </div><!--//media-body-->
						    </div><!--//media-->
					    </div><!--//item--> <hr/>
					    <!--commente-->

			
				<?php endforeach?>
			 </div><!--Container-->
		</section>
