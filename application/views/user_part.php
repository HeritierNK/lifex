    <!DOCTYPE html>
<html lang="en"> 
<head>
    <title>La vraie Ecole :  <?php 

        switch ($this->uri->segment(2)) {
            case 'setting_user_view': 
                # code...
                echo 'Welcome';
                break;
            case 'read_post':
                # code...
                echo 'Detail Article';
                break;
            
            default: 
                # code...
                break;
        }


    ?></title>
    
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
    <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">-->
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

    #postimage{
        
        width: 300px;
        height: 300px;
    }
</style>
<body>
    
    <header class="header text-center">     
        <h1 class="blog-name pt-lg-4 mb-0"><a href="<?php echo base_url() ?>"><?php echo $_SESSION['pseudo_sess'] ;?>
        </a></h1>
        
        <nav class="navbar navbar-expand-lg navbar-dark" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3  mx-auto img-circle" src="<?php echo base_url() ?>assets/images/user.png" alt="image" >            
                    
                    <div class="bio mb-3">Salut, Mon nom c'est Heritier NK. Je vous souhaite la bienvenue sur mon site. Ici vous pouvez apprendre des autres et apprendre aux autres.<br><a href="<?php echo base_url()?>login/logout"><b>Deconnexion</b></a></div> <!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    
                    <hr> 
                </div><!--//profile-section-->
                
                
                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>"><i class="fas fa-home fa-fw mr-2"></i>  Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>posts/list_post"><i class="fas fa-bookmark fa-fw mr-2"></i>  Les  postes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>"><i class="fas fa-user fa-fw mr-2"></i>   Apropos</a>
                    </li>
                </ul>
                
                <div class="my-2 my-md-3">
                    
                    <a class="btn btn-primary" href="<?php echo base_url() ?>posts/create_post" >Ajouter un article</a>
                    
                </div>
            </div>
        </nav> 
    </header>
    
