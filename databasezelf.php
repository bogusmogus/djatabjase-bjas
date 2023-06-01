<?php
function dbConnect(){
	$servername = "localhost" ;
	$dbname = "bjas" ;
	$username = "root" ;
	$password = "" ;
  




	if(isset($conn)){
		return $conn;




	}else{
		try{
			 $conn = new PDO ("mysql:host=$servername;dbname=$dbname",
									$username, $password) ;


			 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
			 echo "Connectie gelukt <br />" ;
		}


		catch(PDOException $e){
			 echo "helaas: " . $e->getMessage() ;
		}
		return $conn;
	}
	
}

?>
