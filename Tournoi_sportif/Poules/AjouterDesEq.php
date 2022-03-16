<!DOCTYPE html>
<html>
<head>
	<title>Ajouter des Equipe</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="3step.css">
	
  <meta charset="utf-8">
</head>

<body data-spy="scroll" class="text-center">
<div id="cont" class="container">
   	
	<div class="form-outer"><!--div qui contient mes pages --->
		   
	  <form id="form1" class="form-signin" method="POST" action="#">
			

			<div id="lesParticipent" class="page slide-page">
			 <!--p>Saisisez le nombre de participant?</p-->
			 <div id="app">
			  <div id="titre" class="title">Ajoutez des équipe</div>
			  <div id="cache" class="field">
			 <div class="label">Saisisez le nombre?</div>
			 <input type="number" name="nbq" id="nbJvouluEq" placeholder="Nombre d'équipe">
			  <input class="" type="button" name="okayyy" id="okay" value="OK">	
			</div>
			</div>

			 <div class="field">
			 <input class="firstNext next" type="button" name="allerS" value="Next">
			</div>
			</div>

			<!--page 2 à la place du celui des poules-->


			<!--page 2 du poules 3-->
			 <div class="page"> 
			 	 <div id="contP" class="title">Les Poules</div>
			 		<div id="poules" class="field">
		           <div class="label">Inserez le nombre de poules </div>
		           <input type="number" name="nbP" id="nbJvouluP" placeholder="Nombre de poules">
		           </div>
			 	    <div class="field btns">
			 	    <button class="prev-1 prev">Previous</button>
			 	   <!--input class="prev-1 prev" type="button" id="secButtonPre" value="Previous"-->
			 	   <input class="" type="button" name="okayyy" id="okayG" value="OK">		
			 	   <input class="next-1 next" type="button" id="secButton" name="next" value="Next">	
			 	   </div>
			 </div>




  	</form>


  	</div>

</div>


	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="EquipeVoulu.js" type="text/javascript"></script>
<script src="LesPoulesG.js" type="text/javascript"></script>
<script src="methodeNext.js" type="text/javascript"></script>
</body>
</html>
