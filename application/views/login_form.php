<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>La vraie Ecole</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="H-son Lewi's">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    Plugin CSS 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css"> -->
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-1.css"> 
    <script src="<?php echo base_url()?>ckeditor/ckeditor.js"></script>
    

</head> 
<style type="text/css">
    #btn_pub
    {
        width: 200px;
        font-size: 20px;
    }

    #pfile
    {
        width: 790px;
        background-color: silver;
    }
    .lireplus
    {
        font-weight: bold;
    }
    .form-signin
    {
      margin-top: 30%;
      margin-left: 40%
      margin-right: 40%;
    }
</style>
<body>
<section class="cta-section theme-bg-light py-5">
<div class="container ">

<div class="row">
  <div class="col-md-4" ></div>
  <div class="col-md-4">
           <?php echo form_open_multipart('login/can_log') ; ?>
              <div class="form-signin">
                  <h2 class="heading text-center">Connexion</h2><br>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </div>
                      <input type="text" class="form-control" name="ps" id="username" placeholder="Pseudo" autocomplete="off" />
                    </div>
                    <strong><span class="alert-danger"><?php echo form_error('ps');?></span></strong>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class=" glyphicon glyphicon-lock "></i>
                      </div>
                      <input type="password" class="form-control" name="pwd" id="password" placeholder="Mot de passe" autocomplete="off" />
                    </div>
                    <strong><span class="alert-danger"><?php echo form_error('pwd');?></span></strong>
                  </div>
                
                     <strong><span class=" alert-danger"><?php echo $this->session->flashdata('error');?></span></strong>
                 
                  <p><a href="<?php echo base_url()?>users/recover_pwd">Mot de passe oublié ?</a></p>

                  <button class="btn btn-lg btn-primary btn-block" type="submit">Connectez-vous</button>
                  </div>
          </form>

</div>
<div class="col-md-4" ></div>
</div>
</div>
</section>>


    
       
    <!-- Javascript -->          
    <script src="<?php echo base_url() ?>assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/popper.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/blog.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="<?php echo base_url() ?>assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 