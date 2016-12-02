<script>


$(".button-collapse").sideNav();
$(document).ready(function() { 
  $('#search').keypress(function(){
    if ($('#search').val().length < 1 ){
      $('.navbar-fixed').next().show();
    }
    else{
      $('.navbar-fixed').next().next().next().hide();
      var res = `<div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
      
      `;
      var noms="jean bonjean bossjean douilletjeanne darcjean meurdesoifjerry kanjuda bricotkelly diotesarha courci licence psychologie";
      var rech = $('#search').val();
      if (noms.indexOf(rech) === -1){
        res+=`<span class="card-title">Aucun résultat ne correspond à votre recherche</span>`;
      }
      else{
        res+=`<span class="card-title">Résultat de la recherche</span><ul class="collection">`;
        var debut=`<li class="collection-item avatar">
                              <img src="img/`;
        var mil =`" alt="" class="circle">
                              <a href="/profilJean"><span class="title">`;
        var mil2 =`" alt="" class="circle">
                              <a href="/licencePsychoGrenoble"><span class="title">`;                      
        var fin =`</span></a><br/>
                          <a class="waves-effect waves-light btn" href="#">Ajouter comme ami</a>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>`;  
        var fin4 =`</span></a><br/>
                          <a class="waves-effect waves-light btn" href="#" id="aff" onclick="ajout()">Ajouter comme ami</a>
                              <a href="#!" class="secondary-content" ><i class="material-icons">email</i></a> 
                            </li>`;                      
        var fin2 = `</span></a><br/>
                          
                             <a href="#" class="waves-effect waves-light btn secondary-content" onClick="change();" id="ad">Rejoindre</a>
                            </li>`;
        var fin3 = `</span></a><br/>
                          
                             <a href="#" class="waves-effect waves-light btn secondary-content">Rejoindre</a>
                            </li>`;
        if ('jean bon'.indexOf(rech) > -1 ){
          res+=debut+"face1.jpg"+mil+"Jean Bon"+fin;
        }
        if ('jean boss'.indexOf(rech) > -1 ){
          res+=debut+"jean.png"+mil+"Jean Boss"+fin4;
        }
        if ('jean douillet'.indexOf(rech) > -1 ){
          res+=debut+"face2.jpg"+mil+"Jean Douillet"+fin;
        }
        if ('jean meurdesoif'.indexOf(rech) > -1 ){
          res+=debut+"face3.jpg"+mil+"Jean Meurdesoif"+fin;
        }
        if ('jeanne darc'.indexOf(rech) > -1 ){
          res+=debut+"face4.jpg"+mil+"Jeanne D'arc"+fin;
        }
        if ('jerry kan'.indexOf(rech) > -1 ){
          res+=debut+"face5.jpg"+mil+"Jerry Kan"+fin;
        }
        if ('juda bricot'.indexOf(rech) > -1 ){
          res+=debut+"face4.jpg"+mil+"Juda Bricot"+fin;
        }
        if ('kelly diote'.indexOf(rech) > -1 ){
          res+=debut+"face6.jpg"+mil+"Kelly Diote"+fin;
        }
        if ('sarha courci'.indexOf(rech) > -1 ){
          res+=debut+"face4.jpg"+mil+"Sarha Courci"+fin;
        }
        if ('licence psychologie'.indexOf(rech) > -1 ){
          res+=debut+"face4.jpg"+mil2+"Licence psychologie <br/> Grenoble "+fin2;
        }
        if ('licence psychologie'.indexOf(rech) > -1 ){
          res+=debut+"face4.jpg"+mil+"Licence psychologie <br/> Valence "+fin3;;
        }
      
        res+=`</ul>`;
      }
      res+=`</div>
      </div>
          </div>
        </div>
      </div>`;
      $('#res_recherche').html(res);
      
    }
  });
});  
  
  function change(){
    $('#ad').text('Quitter');
  }
  
function ajout(){
  $("#aff").text('retirer de la liste d\'ami');
}
  
</script>




<div class="navbar-fixed">
  
    <nav>
      <div class="nav-wrapper indigo accent-4">
        <div class="container">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        
     <form id="search_field">
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons" id="close_search">close</i>
        </div>
      </form>
        
        <ul class="right hide-on-med-and-down">
         
                <li><a href="#" class="searchclick"><i class="material-icons">search</i></a></li>
                <li><a href="/accueil"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="/messagerie">Messagerie</a></li>
                <li><a href="/groupes">Groupes</a></li>
                <li><a href="/ami">Amis</a></li>
                <li><a href="/evenement">Evénements</a></li>
                <li><a href="/logout_action.php">Logout</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#">Recherche</a></li>
          <li><a href="/accueil"><?php echo $_SESSION['user']; ?></a></li>
          <li><a href="/messagerie">Messagerie</a></li>
          <li><a href="/groupes">Groupes</a></li>
          <li><a href="/ami">Amis</a></li>
          <li><a href="/evenement">Evénements</a></li>
          <li><a href="/logout_action.php">Logout</a></li>
        </ul>
        
        </div>
      </nav>
    </div>
  </div>


<script>
  $(".button-collapse").sideNav();
  $("#search_field").hide();
  $(".searchclick").click(function(){
    $(".hide-on-med-and-down").hide();
    $("#search_field").show();
    $("#search").focus();
  });
  
   $("#close_search").click(function(){
    $(".hide-on-med-and-down").show();
    $("#search_field").hide();
    $("#search").focus();
    $('#res_recherche').hide();
    $('.navbar-fixed').next().next().next().show();
  });
  
</script>