<?php
  
  try{
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=siteTournoi','root','');
  }
    catch(Exception $e){
    die('Erreur :'.$e->getMessage());
  }


    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['gmail']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT  login, password FROM organisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['email'];
                    header('Location: landing.php');
                    die();
                }else header('Location: SeConnecterhtml?login_err=password');
            }else header('Location:SeConnecterhtml?login_err=email');
        }else header('Location: SeConnecterhtml?login_err=already');
    }

 /*if($_POST['connexion']){
   $login=$_POST["gmail"];
   $password=$_POST["mdp"];


  if(!empty($login) AND !empty($password)){
     $log=$bdd->query('SELECT login from organisateur') or die("ERREUR:".mysql_error());
     $pass=$bdd->query('SELECT password from organisateur') or die("ERREUR:".mysql_error());
      
     if($login==$log->fetch()['login']&& $password==$pass->fetch()['password']){    
      echo "ok";
     }else echo"non";
    }else echo "un ou plusieur champs est vide!!";
    
  }*/
?>