
                  
<?php foreach($comments  as $c) : ?>

<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">

   <p class="mb-2"><?php echo $c['content']?></p>
   <footer class="blockquote-footer">
   <?php foreach($users as $user) :?>
           <?php
           if ($c['iduser'] == $user['id']) { ?>
           <span> Par : <a href=""> <b><?php echo $user['pseudo'] ?> </b></a></span>
           <?php } ?>
           <?php endforeach?>        
   </footer>

</blockquote>

<?php endforeach?>
                    
