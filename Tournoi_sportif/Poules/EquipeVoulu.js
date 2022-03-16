$().ready(function(){
	$("#okay").click(function(){//pour le bouton suivant 
		//let ret='<input class="btn btn-primary" type="button" id="retour" name="retournez" value="previous">';
		$("#cache").hide();//ce que je veux cacher d'element 
		let nb=$("#nbJvouluEq").val();//valeur voulu
		//let entete="<h3>Veuillez insérer les informations du participant S.V.P</h3>"
		for(let i=1; i<=nb; i++){
			let html=`<div id="h" class="form-group"><label for="inputCity">Nom d'équipe numero ${i}</label>
    	  <input type="text" name="nomEq${i}" class="form-control" id="EqName${i}" placeholder="Nom du participant"></div>`;
			$("#app").append(html);
		}//fin for
	});
});

