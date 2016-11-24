<?php
session_start();

//var_dump($_POST);
$_SESSION['user']=""; 
if ($_POST['username'] === 'jean'  && $_POST['password'] === 'jean'){
    $_SESSION['user'] = "jean";
}
if ($_POST['username'] === 'juliette'  && $_POST['password'] === 'juliette'){
    $_SESSION['user'] = "juliette";
}
if ($_POST['username'] === 'geraldine'  && $_POST['password'] === 'geraldine'){
    $_SESSION['user'] = "geraldine";
}
if ($_POST['username'] === 'roger'  && $_POST['password'] === 'roger'){
    $_SESSION['user'] = "roger";
}
if (! empty( $_SESSION['user'])){
    header('Location: /accueil');
}
else{
    header('Location: /loginerr');
}

?>