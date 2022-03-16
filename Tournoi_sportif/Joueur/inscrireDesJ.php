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
  }catch(Exception $e){
     die('Erreur ICI :'.$e->getMessage());
  }

 if($_POST['inscription']){
     //pour le niveau d'équipe 
      //$niveauEq=0;
      $motRepeDeNouJ=NULL;
      $nbRep=0;
      $cpt1=0;
      $cpt2=0;
    if($_POST["nbJ"]==2){
      $motRepeDeNouJ=$_POST["niveauJ0"];
        switch ($motRepeDeNouJ) {
        case 'PRO': $nbRep=1;
        break;
        case 'DEPARTEMENTAL':$nbRep=2;
        break;
        case 'REGIONAL': $nbRep=3;
        break;
        case 'ELITE': $nbRep=4;
        break;
        case 'LOISIR': $nbRep=5;
        break;
        
        default:
          $nbRep=0;
          break;
      }
      //$motRepeDeNouJ=$_POST["niveauJ0"];
      $niveauEq=$nbRep;//le niveau de l'un de joueur
    }
    else {
       //$varquiStock=$_POST["niveauJ0"];
      $max=0;
      for($i=0;$i<$_POST["nbJ"];$i++){
        $cpt=0;
        $varquiStock=$_POST["niveauJ".$i];
       for($j=0;$j<$_POST["nbJ"];$j++){
        if($varquiStock==$_POST["niveauJ".$j]){
          $cpt++;
        // echo $cpt;
        }
         if($max<$cpt)
            $max=$cpt;
       }
      }
       //echo $max;
       if($max>=2 && $_POST["nbJ"]==3){//compteur =2 ou plus pour 3 joueur
        // echo $max;
          $motRepeDeNouJ=$varquiStock;
            //echo $motRepeDeNouJ;
        }else if($max>=3 && $_POST["nbJ"]>3){//3 ou plus pour plus de 3 joueur
          $motRepeDeNouJ=$varquiStock;
          //echo $motRepeDeNouJ;
        }
        switch ($motRepeDeNouJ) {
        case 'PRO': $niveauEq=1;
        break;
        case 'DEPARTEMENTAL': $niveauEq=2;
        break;
        case 'REGIONAL': $niveauEq=3;
        break;
        case 'ELITE': $niveauEq=4;
        break;
        case 'LOISIR': $niveauEq=5;
        break;
        
        default:
           $niveauEq=0;
          break;
      }
      
    }
    $nomEq=$_POST["nomEquipe"];
    $nomClub=$_POST["nomClub"];
  if(!empty($nomEq)){
    $bdd->exec('INSERT INTO equipe (nomEq,niveauEq,nomClub) VALUES ("'.$nomEq.'","'.$niveauEq.'","'.$nomClub.'")') or die("ERREUR:".mysql_error());
     echo "tt est OK dans equipe!";
    }else echo "un ou plusieur champs est vide!!";
    echo $_POST["nbJ"];
   for($k=0;$k<$_POST["nbJ"];$k++){ 
     $nomJ=$_POST["nomJ".$k];
    $prenomJ=$_POST["prenomJ".$k];
    $niveauJ=$_POST["niveauJ".$k];
   
         if(!empty($nomJ) AND !empty($prenomJ) AND !empty($niveauJ)){
          $bdd->exec('INSERT INTO joueur (nomJ,prenomJ,niveauJ,nomEqq) 
           VALUES ("'.$nomJ.'","'.$prenomJ.'","'.$niveauJ.'","'.$nomEq.'")') or die("ERREUR:".mysql_error());
            echo "tt est OK dans joueur!";
          }else echo "un ou plusieur champs est vide!! ";
   }
 }
  ?>
  </body>
</html>