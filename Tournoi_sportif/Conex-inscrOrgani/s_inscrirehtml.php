<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href=" stylePageInscription.css">
      <meta charset="utf-8">
       
</head>

<body class="text-center">

	 <div class="maDivision">
		<h1 class="h3 mb-3 font-weight-normal">Inscription</h1>


 <form class="form-signin" method="POST" action="s_inscrire.php">
	<div class="form-group">
    
    	<input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom" aria-describedby="emailHelp" >
  	</div>
  	<div  class="form-group">
    
    	<input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Prenom" aria-describedby="emailHelp">
  	</div>


    <div class="form-group">
       
    	<input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Adresse email" aria-describedby="emailHelp">
  	</div>

    <div class="form-group">
      
          
   	    <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" id="exampleInputPassword1">
  	</div>
  
 
     <input class="btn btn-primary" type="submit" name="inscription" value="s'inscrire">
     <a href="SeConnecterhtml.php"><p class="mt-5 mb-3 text-muted">Vous avez déjà un compte ?</p></a>
		
</form>
</div>
</body>
</html>