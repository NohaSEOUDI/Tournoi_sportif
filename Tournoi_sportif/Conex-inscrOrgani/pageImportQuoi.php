
<!-- Page 1 -->
<div class="page">
	<div class="title">Inserez le nombre de poules:</div>
	<form class="form-signin" method="POST" action="Traitementpoule.php">
		 <div id="cont" class="field"> 
            <div class="label">Inserez le nombre de poules </div>
              <input type="number" name="nbP" id="nbJvouluP">
         <a class="btn btn-primary" href="AjouterDesEq.php" role="button">Previous</a>
	 	  <input class="btn btn-primary" type="button" id="nextt" name="next" value="Next">	
	    </div>
	</form>

</div>

 if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        if (isset($_POST['connexion'])){
            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);
 
            if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
                $valid=false;
                $er_mail="Il faut mettre un mail";
            }
            if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
                $valid=false;
                $er_mdp="Il faut mettre un mot de passe";
            }
 
            // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $bdd->query("SELECT * FROM organisateur WHERE login=? AND password=?",
                array($mail,crypt($mdp,"$6$rounds=5000$macleapersonnaliseretagardersecret$")));
            $req = $req->fetch();
 
            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
            if($req['id']==""){
                $valid=false;
                $er_mail="Le mail ou le mot de passe est incorrecte";
            }
            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if ($valid){
               // $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                header('Location:  index.php');
                exit; 
            } 
        }
    }
 

 <!DOCTYPE html>
<html>
<head>
	<title>connection</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylePageConnexion.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="text-center">
	<!--img class="mb-4" src="Sp.jpg" alt="" width="40%" height="20%"-->
    <h1 class="h3 mb-3 font-weight-normal">Bienvenue sur SEO </h1>
    <h1 class="h3 mb-3 font-weight-normal">(Sport Event Organizer)</h1>

 <form class="form-signin" method="POST" action="SeConnecter.php">
	<div class="form-group">
    	 
        <?php
        if (isset($er_mail)){
        ?>
        <div><?= $er_mail ?></div>
        <?php   
        }
        ?>
         <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
    	<!--input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Adresse email" aria-describedby="emailHelp"--->
     
    <div class="form-group">
  <?php

                if (isset($er_mdp)){

                ?>

                    <div><?= $er_mdp ?></div>

                <?php   

                }

            ?>
   	    <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" id="exampleInputPassword1">
  	</div>
  
 	 <div class="checkbox mb-3">
   	 </div>
        <input class="btn btn-primary" type="submit" name="connexion" value="SE CONNECTER">
	</br></br>
    <a class="btn btn-primary" aria-pressed="true" href="s_inscrirehtml.php" role="button">S'INSCRIR</a>
    
</form>

</body>
</html>


   /*if($_POST['seConnecter']){

    $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
    $mdp = trim($mdp); // On récupère le mot de passe 
   
   // $login=$_POST['AdrEmail'];
    //$password=$_POST['motpasse'];

      if(empty($mail)){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
                // On vérifit que le mail est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
            }else{
              // On vérifit que le mail est disponible
                $req_mail = $DB->query("SELECT mail FROM utilisateur WHERE mail = ?",
                   array($mail));
                $req_mail = $req_mail->fetch();
                if ($req_mail['mail'] <> ""){
                  $valid = false;
                   $er_mail = "Ce mail existe déjà";
                }
            }

              if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
              }

            if($valid){
              $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO utilisateur (login, password) VALUES 
                  (?, ?, ?, ?, ?)", 
                   array($nom, $prenom, $mail, $mdp,));

                //header('Location: index.php');

               // exit;
            }*/
