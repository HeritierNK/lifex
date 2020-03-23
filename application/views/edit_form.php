<div class="main-wrapper">
<section class="cta-section theme-bg-light py-5">
            <div class="container ">
                <h2 class="heading text-center" >Completer votre profil</h2>

                <hr>
                    
                    <?php  echo form_open_multipart('users/update_user')?>

                                <div class="row">
                                        <div class="col-md-4  text-center">
                                            <div> <img src="<?php echo base_url()?>assets/images/user.png" style=" width: 200px; height: 200px;">  </div>
                                            <div class="form-group">
                                                <label>Ajouter Une photo</label>
                                                <input type="file" name="input_file" size="20">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style=" font-style: bold;">Pseudo</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="<?php echo $_SESSION['pseudo_sess'] ;?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Prenom</label>
                                                <input type="text" class="form-control border-input" placeholder="Heritier" value="<?php echo $_SESSION['prename_sess']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                            <div class="form-group">
                                                <label>Numero</label>
                                                <input type="tel" class="form-control border-input" placeholder="0987474763" value="<?php echo $_SESSION['tel_sess']; ?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Adresse mail</label>
                                                <input type="email" class="form-control border-input" placeholder="Company" value="<?php echo $_SESSION['email_sess']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" class="form-control border-input" placeholder="ex :Developper, Ecrivain, Ingenieur, Pasteur" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Biographie (Apropos de vous)</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Continuer</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                          
                </div>
            </section>