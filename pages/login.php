
<div class="container">
    <div class="row">
          <div class="col s0 m3 l3"></div>
          <div class="col s12 m6 l6"> 
        
            <div class="row card-panel">
                <form class="col s12" action="/login_action.php" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" name="username" class="validate" required="required">
                            <label for="username">Nom d'utilisateur</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate" required="required">
                            <label for="password">Mot de Passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="checkbox" id="remember_me" name="remember_me" value="on" />
                            <label for="remember_me">Se souvenir de moi</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" id="_submit" name="_submit" name="action">Se connecter </button>
                </form>
            </div>
        </div>
        <div class="s0 m3 l3"></div>
    </div>
</div>