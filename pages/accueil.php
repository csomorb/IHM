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
                        flux de données
                            
                    </div>       
                </div>
            </div>
        </div>
        <div class="col s3">
            <!-- liste des évenement en cours -->
            <div class="card">
                <div class="row">
                    <div class="col s12">
                        <center><h4 class="header">Évènement</h4></center>
                        <!--<div class="card">
                            <span class="card-title"><center>Évènement</center></span>
                        </div>-->
                    </div>
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p240x240/15085697_698488080302752_4043143901866369599_n.jpg?oh=a29b233cf81a3b7f1e564d93afb38810&oe=58D21DCD">
                            </div>
                            <div class="card-content">
                                <span class="title-card-evenement-accueil">Université Grenoble Alpes</span>
                                <p class="text-card-evenement-accueil">Quand nos basketteuses élite font le + beau "Kass" de l'Univ de Nice...70 - 51 !<br/><a>#MBLU</a> <a>#UGAvsNice</a></p>
                                <a class="right">Voir</a><br/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://www.univ-grenoble-alpes.fr/medias/photo/trump_1479286588628-jpg">
                            </div>
                            <div class="card-content">
                                <span class="title-card-evenement-accueil">Université Grenoble Alpes</span>
                                <p class="text-card-evenement-accueil">Trump Président, et après ? 45è président des USA... A J+7, tu te questionnes ? 4 experts UGA croisent ...</a></p>
                                <a class="right">Voir</a><br/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://scontent.xx.fbcdn.net/v/t1.0-9/14184276_10201855880394363_2286520047715810801_n.jpg?oh=b0e82242ffd041edaaef5efa44d877a5&oe=58B97333">
                                <span class="card-title">Master WIC</span>
                            </div>
                            <div class="card-content">
                                <span class="title-card-evenement-accueil">Master WIC <span class="grey-text darken-1-text">Promo 2016</span></span>
                                <p class="text-card-evenement-accueil">On est au bshm ou a l'imag cette aprem ?</p>
                                <a> 2 Réponses </a><a class="right">Voir</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    