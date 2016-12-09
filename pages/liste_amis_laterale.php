        <div class="col s3">
            <!-- menu latéral gauche page d'accueil -->
            <div class="card-panel">
                <span class="card-title">Mes amis</span>
                <div class="row">
                    <p>
                    <div class="chip col s12">
                        <img src="img/face1.jpg" alt="Contact Person">
                        <a>Axel Air</a>
                    </div>
                    <div class="chip col s12">
                        <img src="img/face3.jpg" alt="Contact Person">
                        <a>Jerry Kan</a>
                        </div>
                    <div class="chip col s12">
                        <img src="img/face4.jpg" alt="Contact Person">
                        <a>Larry Bambelle</a>
                    </div>
                    <div class="chip col s12">
                        <img src="img/juliette.png" alt="Contact Person">
                        <a>Juliette Phone</a>
                    </div>
                    <div class="chip col s12">
                        <img src="img/geraldine.png" alt="Contact Person">
                        <a>Geraldine Dupont</a>
                        <?php if((isset($_COOKIE['MessageGeraldine']) )&& ($_SESSION['user'] != 'geraldine')) { ?><i class="small material-icons valign right">email</i><?php } ?>
                    </div>
                    </p>
                </div>
            </div>
        </div>