
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
                  <input id="search" type="search" required>
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
