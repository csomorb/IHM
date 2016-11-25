<script>
$(document).ready(function() { 
  $('#search').keypress(function(){
    if ($('#search').val().length < 2 ){
      $('.navbar-fixed').next().show();
    }
    else{
      $('.navbar-fixed').next().hide();
      var res = `<div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
      
      `;
      var noms="jeanbonjeanbossjeandouilletjeannedarcjeanmeurdesoifjerrykanjudabricotkellydiotesarhacourci";
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
        var fin =`</span></a><br/>
                          <a class="waves-effect waves-light btn">Ajouter comme ami</a>
                              <a href="#!" class="secondary-content"><i class="material-icons">email</i></a> 
                            </li>`;                      
        if ('jean bon'.indexOf(rech) > -1 ){
          res+=debut+"face1.jpg"+mil+"Jean Bon"+fin;
        }
        if ('jean boss'.indexOf(rech) > -1 ){
          res+=debut+"jean.png"+mil+"Jean Boss"+fin;
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
  
  
</script>

<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue lighten-4">
        <div class="container">
          
          <!--<div class="search-wrapper card">
            <input id="search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>-->
          <div class="row">
            <div class="col s6">
              <form>
                <div class="input-field">
                  <input id="search" type="search">
                  <label for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons"></i>
                </div>
              </form>
            </div>
            <div class="col s6">
              <ul class="right hide-on-med-and-down">
                <li><a href="/accueil"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="/messagerie">Messagerie</a></li>
                <li><a href="/groupes">Groupes</a></li>
                <li><a href="/ami">Amis</a></li>
                <li><a href="/evenement">Evénements</a></li>
                <li><a href="/logout_action.php">Logout</a></li>
              </ul>
            </div>
        </div>
      </nav>
    </div>
  </div>
