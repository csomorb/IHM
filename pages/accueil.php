<div class="container">
    <div class="row">
        <div class="col s2">
            <div class="card-panel">
                ici menu
            </div>
        </div>
        <div class="col s8">
            <div class="row">
                <div class="col s12">
                   <div class="card-panel">
                        <!-- message pouvant etre poster par l'utilisateur -->
                        <?php
                            echo "bienvenue". $_SESSION['user']; 
                        ?>
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
    
    
    
    
    
    
