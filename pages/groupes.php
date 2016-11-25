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
if ($_SESSION['user'] == "geraldine"){
?>
                     <ul class="collection">
                        
                        <li class="collection-item avatar"><a href="#" id="defintel">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Défence Intelectuelle</span>
                            <p>Cours 2016<br>
                               
                            </p>
                            </a>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                            
                        </li>
                        
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Enseignants Grenoble Alpes</span>
                            <p>Année 2015/2016<br>
                            </p>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                        </li>
                    
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Psycologie du viellissement</span>
                            <p>Cours 2016 <br>
                        
                            </p>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                        </li>  
                 
                    </ul>

<?php    
}
if ($_SESSION['user'] == "juliette"){
?>
    <ul class="collection">
                        
                        <li class="collection-item avatar"><a href="#" id="defintel">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Défence Intelectuelle</span>
                            <p>Cours 2016<br>
                               
                            </p>
                            </a>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                            
                        </li>
                        
                        <li class="collection-item avatar">
                            <a href="#" id="IHM"><i class="material-icons circle">folder</i>
                            <span class="title">IHM</span>
                            <p>Cours 2016<br>
                            </p></a>
                            <a href="#!" class="secondary-content waves-effect waves-light btn">Quitter</a>
                        </li>
                    
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">L3 Psychologie</span>
                            <p>Promo 2016<br>
                        
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
                            <li class="collection-item">
                            <img src="img/face1.jpg" alt="" class="circle taille_img_profil">    
                                Il s'est pris une racine !<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 4 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:37</span>    
                            
                            </li>
                            <li class="collection-item">
                                <img src="img/face3.jpg" alt="" class="circle taille_img_profil">
                                Haha
                            <br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 1 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:38</span>  
                            
                            </li>
                            <li class="collection-item">
                                <img src="img/face6.jpg" alt="" class="circle taille_img_profil">
                                Ben ça travail bien ici...
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
    $('#preloader').hide();

    $('#m2wic').click(function(){
   //     event.preventDefault();
        $('#groupes').hide();
        $('#groupem2wic').fadeIn();
        $('#poster').hide();
    });
    
    
    $('#clickactualite').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').show();
        $('#membre').hide();
    });
    
    $('#clickpost').click(function(){
    //    event.preventDefault();
        $('#poster').show();
        $('#actualite').hide();
        $('#membre').hide();
    });
    
    $('#clickmembre').click(function(){
    //    event.preventDefault();
        $('#membre').show();
        $('#actualite').hide();
        $('#poster').hide();
    });
    
    $('#add_post').click(function(){
        $('#poster').hide();
        var datenow = new Date();
        var nvpost = `
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content"> <img src="img/jean.png" alt="" class="circle taille_img_profil">`
        nvpost+= $('#textarea1').val().replace(/\n/g, '<br />')+                
                        
                   `
                   <br/>
                   <hr/>
                   <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 
                   <span class="right"> 9 Décembre `+ datenow.getHours() +`:`+datenow.getMinutes() +`</span> 
                   
                    <ul class="collection">
                        <li class="collection-item">
                                <div class="input-field col s12">
                                  <input placeholder="Commenter"type="text" class="validate">
                                </div>
                                
                        </li>
                    
                    </ul>
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
if ($_SESSION['user'] == "geraldine"){
?>
<div class="container" id="groupedef">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Défence Intelectuelle</span>
                    
                    à faire description du groupe
               </div>
               <div class="card-action">
                  <a href="#" id="clickactualite">Fil d'actualité</a>
                  <a href="#" id="clickdoc">Espace documentaire</a>
                  <a href="#" id="clickpost">Poster</a>
                  <a href="#" id="clickmembre">Membres</a>
                </div>
            </div>
        </div>
    </div> 
    <?php include('formulaire_post.php');?>
    <div id="espaced">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                         <span class="card-title">Espace Documentaire</span>
                         
                         
                         <ul class="collection" id="edocc">
                             
                             
                             
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_4.pdf <br/></a>
                             <span class="right">11 novembre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_3.pdf <br/></a>
                             <span class="right">5 novembre 16:35</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>CM_1.pdf <br/></a>
                             <span class="right">11 octobre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_2.pdf <br/></a>
                             <span class="right">5 octobre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_1.pdf <br/></a>
                             <span class="right">25 septembre 10:37</span> <br/>    
                            
                            </li>
                           
                           
                           
                            
                          </ul>
                         
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="actualite">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content"> <img src="img/geraldine.png" alt="" class="circle taille_img_profil">
                  
                   <a href="files/Correction_Exercice.pdf"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP4.pdf <br/></a>
                                <br/>Bonjour, voici la correction du TP4
                   <hr/>
                   <a href="#"><i class="small material-icons">thumb_up</i></a> 1 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 
                   <span class="right"> 11 novembre 10:25</span> 
                   
                    <ul class="collection">
                        
                        <li class="collection-item">
                            <img src="img/face1.jpg" alt="" class="circle taille_img_profil">    
                                Merci<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:37</span>    
                            
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
    $('#groupedef').hide();
    $('#membre').hide();
    $("#preloader").hide();

    $('#defintel').click(function(){
     //   event.preventDefault();
        $('#groupes').hide();
        $('#groupedef').fadeIn();
        $('#poster').hide();
        $('#espaced').hide();
    });
    
    $('#clickdoc').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').hide();
        $('#membre').hide();
        $('#espaced').show();
    });
    
    
    $('#clickactualite').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').show();
        $('#membre').hide();
        $('#espaced').hide();
    });
    
    $('#clickpost').click(function(){
     //   event.preventDefault();
        $('#poster').show();
        $('#actualite').hide();
        $('#membre').hide();
        $('#espaced').hide();
    });
    
    $('#clickmembre').click(function(){
     //   event.preventDefault();
        $('#membre').show();
        $('#actualite').hide();
        $('#poster').hide();
        $('#espaced').hide();
    });
    
    $('#add_post').click(function(){
        $("#preloader").show();
        
        setTimeout(function(){  
        $("#preloader").hide();
        $('#poster').hide();
        var datenow = new Date();
        var nvpost = `
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content"> <img src="img/geraldine.png" alt="" class="circle taille_img_profil">`
        nvpost+= $('#textarea1').val().replace(/\n/g, '<br />')+                
                        
                   `
                   <br/>
                   <a href="files/Correction_Exercice.pdf"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_Exercice.pdf <br/></a>
                   <hr/>
                   <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 
                   <span class="right"> 9 Décembre `+ datenow.getHours() +`:`+datenow.getMinutes() +`</span> 
                   
                    <ul class="collection">
                        <li class="collection-item">
                                <div class="input-field col s12">
                                  <input placeholder="Commenter"type="text" class="validate">
                                </div>
                                
                        </li>
                    
                    </ul>
                   </div>
                </div>
            </div>
        </div>`;
        var docu = `<li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="files/Correction_Exercice.pdf"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_Exercice.pdf <br/></a>
                             <span class="right">9 Décembre `+ datenow.getHours() + `:`+datenow.getMinutes()  +`</span> <br/>    
                            
                            </li>`;
        $('#edocc').prepend(docu);                    
                            
        $('#actualite').prepend(nvpost);
        $('#actualite').show();
        }, 5000);
    });
    
    
    
</script>

<?php
}
?>


<?php
if ($_SESSION['user'] == "juliette"){
?>
<div class="container" id="groupedef">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">IHM</span>
                    
                    à faire description du groupe
               </div>
               <div class="card-action">
                  <a href="#" id="clickactualite">Fil d'actualité</a>
                  <a href="#" id="clickdoc">Espace documentaire</a>
                  <a href="#" id="clickpost">Poster</a>
                  <a href="#" id="clickmembre">Membres</a>
                  <a href="#" id="clickavis">Avis</a>
                </div>
            </div>
        </div>
    </div> 
    <?php include('formulaire_post.php');?>
    <div id="espaced">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                         <span class="card-title">Espace Documentaire</span>
                         
                         
                         <ul class="collection" id="edocc">
                             
                             
                             
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_4.pdf <br/></a>
                             <span class="right">11 novembre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_3.pdf <br/></a>
                             <span class="right">5 novembre 16:35</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>CM_1.pdf <br/></a>
                             <span class="right">11 octobre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_2.pdf <br/></a>
                             <span class="right">5 octobre 10:37</span> <br/>    
                            
                            </li>
                            
                            <li class="collection-item">
                            <img src="img/geraldine.png" alt="" class="circle taille_img_profil">    
                            <a href="#"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP_1.pdf <br/></a>
                             <span class="right">25 septembre 10:37</span> <br/>    
                            
                            </li>
                           
                           
                           
                            
                          </ul>
                         
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="actualite">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content"> <img src="img/geraldine.png" alt="" class="circle taille_img_profil">
                  
                   <a href="files/Correction_Exercice.pdf"><img src="img/pdf.jpg" alt="" class="taille_img_profil">    
                                <br/>Correction_TP4.pdf <br/></a>
                                <br/>Bonjour, voici la correction du TP4
                   <hr/>
                   <a href="#"><i class="small material-icons">thumb_up</i></a> 1 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 
                   <span class="right"> 11 novembre 10:25</span> 
                   
                    <ul class="collection">
                        
                        <li class="collection-item">
                            <img src="img/face1.jpg" alt="" class="circle taille_img_profil">    
                                Merci<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:37</span>    
                            
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
    
    
    <div id="avis">
        <div class="row" >
            <div class="col s12">
                <div class="card">
                    <div class="card-content" id="form_avis">
                        <span class="card-title">Donner son avis sur le cours</span>
                        
                        
                        <div class="rating rating2"><!--
		--><a href="#5" title="Exelent">★</a><!--
		--><a href="#4" title="Bon">★</a><!--
		--><a href="#3" title="Moyen">★</a><!--
		--><a href="#2" title="Bof">★</a><!--
		--><a href="#1" title="Fuyez pauvres fous">★</a>
                    	</div>
                        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Votre avis" id="avic" type="text" class="validate">
          <label for="avis_cours">Votre avis sur le cours</label>
        </div>
      </div>    
    </form>    
    <a class="waves-effect waves-light btn" id="pub_avis">Publier son avis</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Avis sur le cours</span>
                        
                        
                        <div class="ratingD rating2"><!--
		--><a href="#5" title="Exelent">★</a><!--
		--><a href="#4" title="Bon">★</a><!--
		--><a href="#3" title="Moyen">★</a><!--
		--><a href="#2" title="Bof">★</a><!--
		--><a href="#1" title="Fuyez pauvres fous">★</a>
                    	</div>
                        Score de 5.0 sur un total de <span id="nb">126</span> votes.
                        <ul class="collection" id="liste_avis">
                            <li class="collection-item">
                            <img src="img/face1.jpg" alt="" class="circle taille_img_profil">    
                                Interesting !<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 4 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">11 novembre 10:37</span>    
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>


<script>
    $('#pub_avis').click(function() {
       $("#form_avis").html("Votre avis a été pris en compte!"); 
       $('#nb').text(127);
       var datenow = new Date();
       var avisl = `
                            <li class="collection-item">
                            <img src="img/juliette.png" alt="" class="circle taille_img_profil">    
                                cours au top<br/>
                            <a href="#"><i class="small material-icons">thumb_up</i></a> 0 <a href="#"><i class="small material-icons">thumb_down</i></a> 0 <span class="right">9 décembre `+ datenow.getHours() +`:`+datenow.getMinutes() +`</span>    
                            
                            </li>`;
       $('#liste_avis').prepend(avisl);
       
    });


    $('#groupedef').hide();
    $('#membre').hide();
    $("#preloader").hide();
    $("#avis").hide();

    $('#IHM').click(function(){
     //   event.preventDefault();
        $('#groupes').hide();
        $('#groupedef').fadeIn();
        $('#poster').hide();
        $('#espaced').hide();
        $("#avis").hide();
    });
    
    
    $('#clickavis').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').hide();
        $('#membre').hide();
        $('#espaced').hide();
        $("#avis").show();
    });
    
    $('#clickdoc').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').hide();
        $('#membre').hide();
        $('#espaced').show();
        $("#avis").hide();
    });
    
    
    
    $('#clickactualite').click(function(){
    //    event.preventDefault();
        $('#poster').hide();
        $('#actualite').show();
        $('#membre').hide();
        $('#espaced').hide();
        $("#avis").hide();
    });
    
    $('#clickpost').click(function(){
     //   event.preventDefault();
        $('#poster').show();
        $('#actualite').hide();
        $('#membre').hide();
        $('#espaced').hide();
        $("#avis").hide();
    });
    
    $('#clickmembre').click(function(){
     //   event.preventDefault();
        $('#membre').show();
        $('#actualite').hide();
        $('#poster').hide();
        $('#espaced').hide();
        $("#avis").hide();
    });
    
    
    
</script>




<?php
}
?>