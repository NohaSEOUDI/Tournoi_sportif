$().ready(function(){
	$("#bsuivant").click(function(){//pour le bouton suivant 
		let r='<input class="btn btn-primary" type="submit" id="bpreced" name="retourInscri" value="Retournez">';
		$("#elementSaisi").hide();//ce que je veux cacher d'element 
		let nb=$("#nbJvoulu").val();//valeur voulu
		for(let i=0; i<nb; i++){
			let html=`<div class="form-group" id="SuiteFormulaire">
			<input type="text" name="nomJ${i}" class="form-control" id="Jname${i}" placeholder="Nom de joueur">
			<input type="text" name="prenomJ${i}" class="form-control" id="Jprenom${i}" placeholder="Prenom de joueur"><select class="form-control" name="niveauJ${i}">
			<option value="LOISIR"> LOISIR </option>
			<option value="DEPARTEMENTAL"> DEPARTEMENTAL </option>
			<option value="REGIONAL" > REGIONAL </option>
			<option value="N3"> N3 </option>
			<option value="N2"> N2 </option>
			<option value="ELITE"> ELITE </option>
			<option value="PRO"> PRO </option></select></div>`;
			$("form").append(html);
		}//fin for
		let ht='<input class="btn btn-primary" type="submit" name="inscription" value="S\'inscrire">';
		$("form").append(r,ht);
	});
});
// Nom - prenom - niveau 
//let p='<input class="btn btn-primary" type="submit" id="bpreced" name="retour_inscription" value="Retournez">';
	/*$("#bpreced").click(function(){
		$("#elementSaisi").show();
					
	})*/