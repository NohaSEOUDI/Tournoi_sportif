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
    <div class="maDivision">
	<!--img class="mb-4" src="Sp.jpg" alt="" width="40%" height="20%"-->
    <h1 class="h3 mb-3 font-weight-normal">Bienvenue sur SEO </h1>
    <h1 class="h3 mb-3 font-weight-normal">(Sport Event Organizer)</h1>

 <form class="form-signin" method="POST" action="SeConnecter.php">
	<div class="form-group">
    	 
      <input type="email" class="form-control" name="gmail" id="exampleFormControlInput1" placeholder="Adresse email">
    	<!--input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Adresse email" aria-describedby="emailHelp"--->
     
   	  <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" id="exampleInputPassword1">
  
    <input class="btn btn-primary" type="submit" name="connexion" value="SE CONNECTER">
	</br>
    <a class="btn btn-primary" aria-pressed="true" href="s_inscrirehtml.php" role="button">S'INSCRIR</a>
    
</form>
</div>
</body>
</html>