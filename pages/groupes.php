<div class="container" id="groupes">

    <div class="row">
        <div class="col s12">
            <div class="card-panel">
               <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label for="search"><i class="material-icons">search</i>Rechercher un groupe</label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Mes groupes</span>
<?php
if ($_SESSION['user'] == "jean"){
?>
                    <ul class="collection">
                        
                        <li class="collection-item avatar"><a href="#" id="m2wic">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Master WIC</span>
                            <p>Promo 2016<br>
                               
                            </p>
                            </a>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                            
                        </li>
                        
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Master WIC</span>
                            <p>Promo 2005<br>
                               Best Promo ever
                            </p>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                        </li>
                    
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Les anciens camarades</span>
                            <p>Promo 2005 <br>
                               Un groupe pour rester en contact
                            </p>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                        </li>  
                 
                    </ul>
<?php    
}
?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if ($_SESSION['user'] == "jean"){
?>
<div class="container" id="groupem2wic">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">M2WIC</span>
                    
                    à faire description du groupe
               </div>
               <div class="card-action">
                  <a href="#">Fil d'actualité</a>
                  <a href="#">Espace documentaire</a>
                  <a href="#" id="clickpost">Poster</a>
                  <a href="#">Membres</a>
                </div>
            </div>
        </div>
    </div> 
    <?php include('formulaire_post.php');?>
    <div id="actualite">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        
                        à faire: fil d'actualité
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('#groupem2wic').hide();

    $('#m2wic').click(function(){
        event.preventDefault();
        $('#groupes').hide();
        $('#groupem2wic').fadeIn();
        $('#poster').hide();
    });
    
    $('#clickpost').click(function(){
        event.preventDefault();
        $('#poster').show();
        $('actualite').hide();
    });
    
    $('#add_post').click(function(){
        $('#poster').hide();
        var nvpost = `
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">`
        nvpost+= $('#textarea1').val()+                
                        
                   `</div>
                </div>
            </div>
        </div>`;
        $('#actualite').prepend(nvpost);
        $('#actualite').show();
    });
    
</script>
<?php    
}
?>
