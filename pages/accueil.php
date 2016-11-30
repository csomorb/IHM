<div class="container">
    <div class="row">
        <div class="col s2">
            <!-- menu latéral gauche page d'accueil -->
            <div class="card-panel">
                <?php if ($_SESSION['user'] == "jean"){ ?><img class="responsive-img circle" src="img/jean.png"><?php } ?>
                <?php if ($_SESSION['user'] == "geraldine"){ ?><img class="responsive-img circle" src="img/geraldine.png"><?php } ?>
                Bonjour <?php echo $_SESSION['user']; ?>
                <hr/>
                <!-- affichage des groupes -->
                <span class="grey-text darken-3-text">RACCOURCIS</span>
                <ul>
                    <?php if ($_SESSION['user'] == "jean"){ ?>
                        <li><a href="#!" class="title-menu-accueil collection-item">Master WIC</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item active">Master WIC</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item">Les anciens camarades</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['user'] == "geraldine"){ ?>
                        <li><a href="#!" class="title-menu-accueil collection-item">Défence Intelectuelle</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item active">Enseignants Grenoble Alpes</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item">Psycologie du viellissement</a></li>
                    <?php } ?>
                </ul>
                <hr/>
                <span class="grey-text darken-3-text">PARCOURIR</span>
                <ul>
                    <li><a href="#!" class="title-menu-accueil /groupe">Groupes</a></li>
                    <li><a href="#!" class="title-menu-accueil /page">Pages</a></li>
                    <li><a href="#!" class="title-menu-accueil /evenement">Évenements</a></li>
                </ul>
            </div>
        </div>
        <div class="col s7">
            <div class="row">
                <div class="col s12">
                   <div class="card-panel">
                        <!-- message pouvant etre poster par l'utilisateur -->
                        <div class="input-field">
                           <label for="textarea1">Exprimer-vous</label>
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card-panel">
                        <!--affichage des derniers message de groupes ' a voir avec barnabas-->
                        <!-- ============================================================================================================================================================================================================================= -->
                        <div class="card">
                            <div class="card-content">
                                <div><img src="img/face1.jpg" alt="" class="circle taille_img_profil"><br/><a>Utilisateur 1</a></div><br/>
                            </div>
                            <div class="card-content">
                                Un x² rentre dans une forêt.  Il en ressort en étant x. <br/>Qu'est-ce qu'il a fait ?
                            
                           </div>
                           <div class="card-action">
                               <a href="#"><i class="small material-icons">thumb_up</i></a> 6 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:36</span><span class="right"><a>2 réponses</a></span>
                            </div>
                        </div>
                        
                        
                          <div class="card">
                            <div class="card-content">
                                <div><img src="img/face2.jpg" alt="" class="circle taille_img_profil"><br/><a>Utilisateur 2</a></div><br/>
                            </div>
                            <div class="card-image">
                                <img src="https://scontent.xx.fbcdn.net/v/t1.0-9/14184276_10201855880394363_2286520047715810801_n.jpg?oh=b0e82242ffd041edaaef5efa44d877a5&oe=58B97333">
                                <span class="card-title">Master WIC</span>
                            </div>
                             <div class="card-content">
                                <p>On est au bshm ou a l'imag cette aprem ?</p>
                            </div>
                           <div class="card-action">
                               <a href="#"><i class="small material-icons">thumb_up</i></a> 40 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:36</span><span class="right"><a>2 Réponses</a></span>
                            </div>
                        </div>
                        
                
                        <!-- ============================================================================================================================================================================================================================= -->
                    </div>       
                </div>
            </div>
        </div>
        <?php include'menu_laterale_droit.php'; ?>
    </div>
</div>
    