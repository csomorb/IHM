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
                            <form action="https://ihm-pgns34.c9users.io/messagerie" method="post">
                                <label for="MessageGeraldine">Envoyer un nouveau message</label>
                                <textarea id="MessageGeraldine" name="MessageGeraldine" class="materialize-textarea"></textarea>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                    <i class="material-icons right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php if($_SESSION['user'] == "geraldine"){ ?>
                <div class="col s12">
                    <div class="card-panel">
                        <!--affichage des derniers message de groupes ' a voir avec barnabas-->
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12"><img src="img/face1.jpg" alt="" class="circle taille_img_profil"><br/><a>Axel Air</a></div><br/>
                                        <div class="col s12">
                                             Bonjour Madame<br/>
                                            Ou peut on trouver le cours de défence intelectuelle s'il vous plait.<br/>
                                            <br/>
                                            cordialement.<br/>
                                            Axel Air<br/>
                                            <div class="right grey-text darken-1-text">le 08/12/2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12"><img src="img/geraldine.png" alt="" class="circle taille_img_profil"><br/><a>Geraldine Dupont</a></div><br/>
                                        <div class="col s12">
                                            Bonsoir jeune homme<br/>
                                            Il faut suivre en cours et prendre des notes!<br/>
                                            Je ne peux rien pour vous.<br/>
                                            <br/>
                                            Géraldine D.<br/>
                                            <div class="right grey-text darken-1-text">le 09/12/2016</div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-action">
                                        <div class="input-field">
                                            <label for="textarea1">répondre</label>
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                                <i class="material-icons right"></i>
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                <?php } else if (isset($_COOKIE['MessageGeraldine'])) { ?>
                <div class="col s12">
                    <div class="card-panel">
                        <!--affichage des derniers message de groupes ' a voir avec barnabas-->
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12"><img src="img/geraldine.png" alt="" class="circle taille_img_profil"><br/><a>Geraldine Dupont</a></div><br/>
                                        <div class="col s12">
                                            <?php 
                                                $message=str_replace('\n', '<br/>', $_COOKIE['MessageGeraldine']);
                                                echo $message;
                                            ?>
                                            <div class="right grey-text darken-1-text">le 09/12/2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <div class="input-field">
                                        <label for="textarea1">répondre</label>
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                            <i class="material-icons right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                <?php } ?>
            </div>
        </div>
       <div class="col s3">
            <div class="row">
                <div class="col s12">
                    <?php include'connaissez_vous_peut_etre.php'; ?>
                </div> 
                <div class="col s12">
                    <?php include'menu_laterale_droit.php'; ?>
                    <?php //print_r($_COOKIE['message']); ?>
                </div> 
            </div>
        </div>
    </div>
</div>