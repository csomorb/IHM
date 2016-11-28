

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
              
            </div>
          </div>
        </div>
      </div>
    
    
    <div class="row" id="mes_event">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Mes événements</span>
              <p>La liste de mes événements</p>
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


    
</script>