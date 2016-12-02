<?php
    session_start();
    
    if(isset($_POST['MessageGeraldine']))
    {
        //echo 'Ya un postGéraldine';
        $value = $_POST["MessageGeraldine"];
        //echo $value;
        //$_SESSION['MessageGeraldine'] = $_POST['MessageGeraldine'];
        setcookie('MessageGeraldine', $value,  (time()+86400)); // 1 day
        //$_COOKIE["MessageGeraldine"] = $_POST["MessageGeraldine"];(time() + 3600)
    } 
    
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
                echo '<div id="page_content">';
				require_once($page);
				echo '</div>';
			}
            else {
                require_once("404.php");
            }
        ?>
        
        <div id="res_recherche"></div>
        
       
    </body>
</html>