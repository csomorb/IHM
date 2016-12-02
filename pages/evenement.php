

<div class="container">
    
    <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Mes événements</span>
              <div class="card-action">
              <a href="#">Liste de mes événements</a>
              <a href="#" id="click_crer">Créer un événement</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    
    
    
    <div class="row" id="crer_event">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Créer un événement</span></span>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Nom de l'événement" id="nom" type="text" class="validate">
                  <label for="nom">Nom</label>
                </div>
              </div>
              
              <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Description</label>
                  </div>
                </div>
              
              
              <div class="row">
                <div class="input-field col s6">
                  <div class="form-control-wrapper">
                      
								<input type="text" id="date-start" class="form-control floating-label" placeholder="Début de l'événement">
								<label for="date-start">Début</label>
				  </div>
                </div>
                <div class="input-field col s6">
                  <div class="form-control-wrapper">
								<input type="text" id="date-end" class="form-control floating-label" placeholder="Fin  de l'événement">
								<label for="date-end">Fin</label>
							</div>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Lieu de l'événement" id="lieu" type="text" class="validate">
                  <label for="lieu">Lieu</label>
                </div>
              </div>
              
              
              <div class="file-field input-field">
                  <div class="btn">
                    <span>Photo</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              
              <div class="row">
                <!-- Switch -->
                  <div class="switch">
                    <label>
                      Public
                      <input type="checkbox">
                      <span class="lever"></span>
                      Privé
                    </label>
                  </div>
              </div>
              
              
              
              <a class="waves-effect waves-light btn" id="crer_click">Créer</a>
              
            </div>
          </div>
        </div>
      </div>
    
    
    <div class="row" id="mes_event1">
        
        <div id="mes_event">
          <div class="col s12">
          <div class="card">
            <div class="card-content"><div class="card-image"><img src="img/<?php if ($_SESSION['user'] == "jean"){ echo "meeting.jpg";} else {echo "soire.jpg"; }  ?>">
              <span class="card-title" id="titre_event">
              </span></div>
              <p>Organisé par : </p>
      <div class="row">       
      <div class="col s12 m8 l4">          
        <div class="card-panel padding_8 grey lighten-5 z-depth-1">
          <div class="no_margin_bottom row valign-wrapper">
           
              <img src="img/jean.png" alt="" class="circle responsive-img taille_img"> <!-- notice the "circle" class -->
           
     
              <span class="black-text">
                Jean BOSS
              </span>
        
          </div>
        </div>
      </div>      
              <div class="col s12 m2 l6">
              </div>
              </div> 
              <p id="event_contenu"></p>
              <a class="waves-effect waves-light btn" id="ajout_click" href="#">Ajouter des personnes</a>
              <hr/>
               <div class="row" id="poster">
                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Contenu du post</label>
                        </div>
                      </div>
                      <button class="btn waves-effect waves-light" type="submit" name="action" id="add_post">Poster
                  </button>
                     </div>
                  </div>
              </div>  
            </div>
          </div>
      </div>
          
          
        </div>
      
        <div class="col s12" id="mes_event2">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Mes événements</span>
              <p>La liste de mes événements</p>
            </div>
          </div>
        </div>
      </div>
    

    
    <div class="row" id="ajout_ami">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Ajouter des personnes</span>
              <a class="waves-effect waves-light btn right disabled" id="nab">Envoyer les invitations</a>
              <form>
                <div class="input-field">
                  <input id="search2" type="search" required>
                  <label for="search2"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
                
                <ul class="collection">
                             <li class="collection-item avatar">
                              <img src="img/face4.jpg" alt="" class="circle">
                              <span class="title">Groupe M2WIC</span>
                              <p>Promo 2005</p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a> 
                            </li>         
                   
                   
                            <li class="collection-item avatar">
                              <img src="img/face1.jpg" alt="" class="circle">
                              <span class="title">Jean Meurdesoif</span>
                              <p>Etudiant M2WIC</p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a> 
                            </li>
              
                            
                            <li class="collection-item avatar">
                              <img src="img/face2.jpg" alt="" class="circle">
                              <span class="title">Jerry Kan</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a> 
                            </li>
                       
                            
                            <li class="collection-item avatar">
                              <img src="img/face3.jpg" alt="" class="circle">
                              <span class="title">Juda Bricot </span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a>  
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face4.jpg" alt="" class="circle">
                              <span class="title">Kelly Diote</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a> 
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face5.jpg" alt="" class="circle">
                              <span class="title">Ray Defesse</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a> 
                            </li>
                            
                            <li class="collection-item avatar">
                              <img src="img/face6.jpg" alt="" class="circle">
                              <span class="title">Sarah Courci</span>
                              <p>Etudiant M2WIC
                              </p>
                              <a href="#!" class="secondary-content waves-effect waves-light btn ava">Ajouter</a>  
                            </li>
                            
                          </ul>
                
                
                
              </form>
              
              
            </div>
          </div>
        </div>
      </div>
    
    
</div>



<script src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="../js/datetimepicker.js"></script>

<script>
$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

$('#ajout_ami').hide();
$('#mes_event').hide();
//$('.mes_event').show();
$('.mes_event2').show();
$('#crer_event').hide();


$('#click_crer').click(function() {
  $('#mes_event1').hide();
  $('#crer_event').show();
})
    
$('#crer_click').click(function(){
  $('#titre_event').text($('#nom').val());
  var res= `Début `+ $('#date-start').val() + ` Fin: `+ $('#date-end').val()+ ` Lieu : `+ $('#lieu').val() + `<br/> `+ $('#textarea1').val().replace(/\n/g, '<br />');
  $('#event_contenu').html(res);
  $('#mes_event1').show();
  $('#mes_event2').hide();
    $('#mes_event').show();
    $('#crer_event').hide();
    
});    

$('.container').on('click','#ajout_click',function(){
  $('#mes_event').hide();
  $('#ajout_ami').show();
});

$('.ava').click(function(){
  $(this).text("Retirer");
  $('#nab').removeClass("disabled");
});

$("#nab").click(function() {
   $('#ajout_ami').hide();
   $('#ajout_click').text("Modifier la liste des invités");
   $('#mes_event').show();
});
    
</script>