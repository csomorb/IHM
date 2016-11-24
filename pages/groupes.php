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
                  <a href="#" id="clickactualite">Fil d'actualité</a>
                  <a href="#">Espace documentaire</a>
                  <a href="#" id="clickpost">Poster</a>
                  <a href="#" id="clickmembre">Membres</a>
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
                        <img src="img/face1.jpg" alt="" class="circle taille_img_profil">
                        Un x² rentre dans une forêt.  Il en ressort en étant x. <br/>Qu'est-ce qu'il a fait ?

                        <hr/>
                        <a href="#"><i class="small material-icons">thumb_up</i></a> 6 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:36</span>
                        <ul class="collection">
                            <li class="collection-item">Il s'est pris une racine !<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 4 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:37</span>    
                            
                            </li>
                            <li class="collection-item">Haha
                            <br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 1 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:38</span>  
                            
                            </li>
                            <li class="collection-item">Ben ça travail bien ici...
                            <br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:40</span>  
                            
                            </li>
                            <li class="collection-item">
                                <div class="input-field col s12">
                                  <input placeholder="Commenter"type="text" class="validate">
                                </div>
                                
                            </li>
                            
                          </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div id="membre">
         <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Liste des membres</span>
                          <ul class="collection">
                            
                   
                            <li class="collection-item avatar">
                              <img src="img/face1.jpg" alt="" class="circle">
                              <span class="title">Jean Meurdesoif</span>
                              <p>Etudiant M2WIC</p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
              
                            
                            <li class="collection-item avatar">
                              <img src="img/face2.jpg" alt="" class="circle">
                              <span class="title">Jerry Kan</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
                       
                            
                            <li class="collection-item avatar">
                              <img src="img/face3.jpg" alt="" class="circle">
                              <span class="title">Juda Bricot </span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face4.jpg" alt="" class="circle">
                              <span class="title">Kelly Diote</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face5.jpg" alt="" class="circle">
                              <span class="title">Ray Defesse</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face6.jpg" alt="" class="circle">
                              <span class="title">Sarah Courci</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>
                            
                          </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $('#groupem2wic').hide();
    $('#membre').hide();

    $('#m2wic').click(function(){
        event.preventDefault();
        $('#groupes').hide();
        $('#groupem2wic').fadeIn();
        $('#poster').hide();
    });
    
    
    $('#clickactualite').click(function(){
        event.preventDefault();
        $('#poster').hide();
        $('#actualite').show();
        $('#membre').hide();
    });
    
    $('#clickpost').click(function(){
        event.preventDefault();
        $('#poster').show();
        $('#actualite').hide();
        $('#membre').hide();
    });
    
    $('#clickmembre').click(function(){
        event.preventDefault();
        $('#membre').show();
        $('#actualite').hide();
        $('#poster').hide();
    });
    
    $('#add_post').click(function(){
        $('#poster').hide();
        var nvpost = `
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">`
        nvpost+= $('#textarea1').val().replace(/\n/g, '<br />')+                
                        
                   `
                   <br/>
                   <hr/>
                   <i class="small material-icons">thumb_up</i> 0 <i class="small material-icons">thumb_down</i> 0 
                   </div>
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
