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
                  <label for="nom">Nom de l'événement</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s6">
                  <input type="date" class="datepicker" id="date_deb">
                  <label for="date_deb">Début</label>
                </div>
                <div class="input-field col s6">
                  <input type="date" class="datepicker" id="date_fin">
                  <label for="date_fin">Fin</label>
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

<script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 5 // Creates a dropdown of 15 years to control year
  });
    
</script>