<!DOCTYPE HTML>

<html>

  <head>
    <title></title>
    <meta content="info">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css" />
  </head>
  
  <?php   
        /*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "sangouam", "gi3y7fph");    
		
		/*connexion à la base de donnée depuis la machine virtuelle INFO642*/
		/*$conn = @mysqli_connect("localhost", "etu", "bdtw2021");*/  

		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "sangouam"); 
            /*mysqli_select_db($conn, "etu"); */ /*sélection de la base sous la VM info642*/
		
            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }
		
  ?> 
  
  <body>
  
  <div id="fond">
  
    <div id="titre">
      <span>APP Robot</span>
    </div>
  
    <div id="menu">
      <ul id="lemenu">
      <?php  
      $encours = array(" "," "," "," "," ");

      if( !isset($_GET["page"]) ) { 
        $page=0;
      }else{
        $page=$_GET["page"];
      }
      $encours[$page] = "encours";
       
      echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
      echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">But et objectifs</a></li>\n";
      echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Notre équipe et organisation</a></li> \n";   
      echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">Suivi fun de l'avancement</a></li> \n";   
      echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">Archives</a></li> \n"; 
      ?> 
      </ul>
    </div>
  
    <div id="contenu">
    <?php
      if( file_exists("page_".$page.".inc.php") ){ 
        include("page_".$page.".inc.php");
      }
    ?>
    </div>
  
    <div id="pied">
      <span>Polytech Annecy-Chambéry - Module IGI642- Base de données et Technologies web</span>
    </div>
 
  </div>
  
  </body>
</html>  
  
  
  
