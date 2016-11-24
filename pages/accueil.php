<div class="container">
    <div class="row">
        <div class="col s2">
            <!-- menu latéral gauche page d'accueil -->
            <div class="card-panel">
                <img class="responsive-img circle" src="img/jean.png">
               Bonjour <?php echo $_SESSION['user']; ?>
                <hr/>
                <!-- affichage des groupes -->
                 <span class="grey-text darken-3-text">Raccourcis</span>
                <ul>
                    <?php if ($_SESSION['user'] == "jean"){ ?>
                        <li><a href="#!" class="title-menu-accueil collection-item">Master WIC</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item active">Master WIC</a></li>
                        <li><a href="#!" class="title-menu-accueil collection-item">Les anciens camarades</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col s8">
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
        <div class="col s2">
            <!-- liste des évenement en cours -->
            <div class="card-panel">
                Liste des évenement
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    
