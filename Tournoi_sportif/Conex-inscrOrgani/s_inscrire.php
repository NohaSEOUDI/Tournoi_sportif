<!DOCTYPE html>
<html>
<head>
  <title>fichier php</title>
  <meta charset="utf-8">
 
</head>
<body>
 <?php
	
	 try{//il fonctionne parfaitement
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=siteTournoi','root','');
  }
  catch(Exception $e){
  die('Erreur :'.$e->getMessage());
  }

 if($_POST['inscription']){
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $login=$_POST['mail'];
    $password=$_POST['mdp'];
    if(!empty($nom) AND !empty($prenom) AND !empty($login) AND !empty($password)){
       $bdd->exec('INSERT INTO organisateur  (nom,prenom,login,password) VALUES ("'.$nom.'","'.$prenom.'","'.$login.'","'.$password.'")') or die("ERREUR:".mysql_error());
        echo "OK!";
    }else echo "un ou plusieur champs est vide!!";
    
  }


  ?>
  </body>
</html>