
<?php   

	/* 
	Inclure ce fichier dans toute pages nécessitant une connection vers la base de donné.
	
	Pour inclure ce fichier, copier-coller les lignes suivantes:
	
		<?php
		  if( file_exists("./include/bdd_connection.php") ){ 
			include("./include/bdd_connection.php");
		  }
		?>
	
	Pour faire une requête, inspirez-vous des lignes suivantes:
	
		$sql = "SQL String";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
		while ($row = mysqli_fetch_assoc($result)) { 
			...
		}
	
	*/

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
		
        /*Encodage UTF8 pour les échanges avecla BD*/
        mysqli_query($conn, "SET NAMES UTF8");
    }
?> 