<div class="container">
    <div class="row">
        <?php include'liste_amis_laterale.php'; ?>
        
        <!-- Liste des messages -->
        <div class="col s6">
            <div class="row">
                <div class="col s12">
                   <div class="card-panel">
                        <!-- formulaire message pouvant etre poster par l'utilisateur -->
                        <div class="input-field">
                            Destinataire : 
                        </div>
                        
                        <div class="input-field">
                            <label for="textarea1">Envoyer un nouveau message</label>
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                <i class="material-icons right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card-panel">
                        <!--affichage des derniers message de groupes ' a voir avec barnabas-->
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <div><img src="img/face1.jpg" alt="" class="circle taille_img_profil"><br/><a>Utilisateur 1</a></div><br/>
                                    </div>
                                    <div class="card-content">
                                        Bonjour Madame<br/>
                                        Ou peut on trouver le cours de défence intelectuelle s'il vous plait.
                                        
                                        cordialement.
                                        Axel Air
                                    </div>
                                    <div class="card-action">
                                    <a href="#"><i class="small material-icons">thumb_up</i></a> 6 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:36</span><span class="right"><a>2 réponses</a></span>
                                </div>
                            </div>
                        </div>
                            
                    </div>       
                </div>
            </div>
        </div>
       <div class="col s3">
            <div class="row">
                <div class="col s12">
                    <?php include'connaissez_vous_peut_etre.php'; ?>
                </div> 
                <div class="col s12">
                    <?php include'menu_laterale_droit.php'; ?>
                </div> 
            </div>
        </div>
    </div>
</div>
    