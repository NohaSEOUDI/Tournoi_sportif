<!DOCTYPE html>
<html>
<head>
	<title>Poules</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Poules.css">
</head>

<body class="text-center">
	<div class="container">
		<header>Les Poules</header>
		<form class="form-signin" method="POST" action="Traitementpoule.php">
		
		 <div id="cont" class="field"> 
            <div class="label">Inserez le nombre de poules </div>
              <input type="number" name="nbP" id="nbJvouluP">
         <a class="btn btn-primary" href="AjouterDesEq.php" role="button">Previous</a>
	 	  <input class="btn btn-primary" type="button" id="nextt" name="next" value="Next">	
	    </div>
	    </form>
	</div>
	 <!--input type="number" name="nbP" class="form-control" id="nbJvouluP" placeholder="Nombre de poule"-->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="   sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="LesPoulesG.js" type="text/javascript"></script>
</body>
</html>