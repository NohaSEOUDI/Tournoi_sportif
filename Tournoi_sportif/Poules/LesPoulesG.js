$().ready(function(){
	$("#okayG").click(function(){//pour le bouton suivant 
	
		$("#poules").hide();//ce que je veux cacher d'element 
		let nb=$("#nbJvouluP").val();//valeur voulu
		for(let i=1; i<=nb; i++){
		let html=`<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  				<div class="card-header">Poule ${i}</div>
   			    <p class="card-text">Some quick example</p>
  				</div>
				</div>`;
			$("#contP").append(html);
		}//fin for
		//let ht='<input class="btn btn-primary" type="submit" name="inscription" value="Commencer Tour">';
		//$("form").append(ht);
	});
});
