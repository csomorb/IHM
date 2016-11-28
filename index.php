<?php
    session_start();
    $querystring = htmlspecialchars($_SERVER['QUERY_STRING']);
    if (empty($querystring)) {
        $params = "login";
    }
    else {
        $params = $querystring;
    }
    $folder = explode("/", $params)[0];
    $page = "pages/". $params . ".php";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Csomor Barnabas Garnesson Pierre">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            <?php
            echo $params;
            ?>
        </title>
        
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
            
    </head>
    <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        
        
        
        <?php
        
        
            if ($params !== "login" && $params !== "loginerr")
                include('menu.php');
        
    
            if (file_exists($page)) {
				require_once($page);
			}
            else {
                require_once("404.php");
            }
        ?>
        
        <div id="res_recherche"></div>
        
       
    </body>
</html>