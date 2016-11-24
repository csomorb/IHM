 <div class="row" id="poster">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                 <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Contenu du post</label>
                        </div>
                      </div>
                    </form>
                  </div>
                  
                  <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" multiple>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Sélectionner des fichiers">
                      </div>
                   </div>
                  <div class="switch">
                      
    <label>
      Privé
      <input type="checkbox">
      <span class="lever"></span>
      Public
    </label><br/>
    Si un post est privé il est visible seulement par les membres du groupe, s'il est public il est visible par toutes les personnes visitant le groupe.
  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action" id="add_post">Poster
                  </button>
                </div>  
            </div>    
        </div>  
</div>