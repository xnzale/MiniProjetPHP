<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="other.css">
    <title>Search</title>
</head>
<body>


             <?php   
                    $produit=array(
                        array('Ordinateur',14,500,2000),
                        array('Imprimente',10,150,1500),
                        array('Souris',2,1000,2000),
                        array('Clavier',11,500,2500),
                        array('Ecran',30,100,3000),
                        array('diskdure',10,600,6000),
                        array('Rame', 9,850,2550),
                        array('Batterie',15,700,3500),
                        array('Chargeur',24,100,2400),
                        array('Carte',10,2400,4800)

                    );
         ?>
            <br><br>
        <h1>RECHERCHER </h1>
        <br>
            
              <div class="alias">
              <form class="form-inline" method="post" action=""> 
               
                   
                     <input type="number" name="recherche" class="form-control" id="recherche" placeholder="taper un seuil">
                     <input type="number" name="pumin" class="form-control" id="inputEmail3" placeholder="Prix minimum">
                    
                    <input type="number" name="pumax" class="form-control" id="inputEmail3" placeholder="Prix Maximum">
               
                    <button type="submit" name="valider" class="btn btn-primary mb-2">RECHERCHER</button>
              
                </form>
              </div>
              
       
                <?php 
                      $ligne=10;
                      $colonne=4;
                    if (isset($_POST ['valider'])){
                        $r=$_POST['recherche'];
                        $prixmin=$_POST['pumin'];
                        $prixmax=$_POST['pumax'];
                      
                            echo '<table class="table ">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">DESIGNATION</th>
                                    <th scope="col">QUANTITE</th>
                                    <th scope="col">PRIX UNITAIRE</th>
                                    <th scope="col">MONTANT</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ';                                          
          for($i=0;$i < $ligne;$i++){
          echo '<tr>';
          if($r<=$produit[$i][1] && $r!=""){
         if($produit[$i][1] < 10){
                                                
         for($j=0;$j<$colonne;$j++){
        echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
      }
     }
     else {
     for($j=0;$j<$colonne;$j++){
        echo '<td >'.$produit[$i][$j].'</td>';
        }
         }
         }
        elseif($prixmin<=$produit[$i][2] && $prixmax=="" && $r==""){
         if($produit[$i][1]<10){
                                            
        for($j=0;$j<$colonne;$j++){
          echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
         }
     }
     else {
     for($j=0;$j<$colonne;$j++){
     echo '<td >'.$produit[$i][$j].'</td>';
    }
     }
    }
     elseif($prixmax<=$produit[$i][2] && $prixmin=="" && $r==""){
    if($produit[$i][1]<10){
                                        
  for($j=0;$j<$colonne;$j++){
     echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
     }
 }
  else {
    for($j=0;$j<$colonne;$j++){
   echo '<td >'.$produit[$i][$j].'</td>';
     }
}
 }
 elseif( $r=="" && $produit[$i][2]>=$prixmin && $produit[$i][2]<=$prixmax && $prixmin!="" && $prixmax!="" ){
    if($produit[$i][1]<10){
                                                
     for($j=0;$j<$colonne;$j++){
         echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
 }
  }
     else {
    for($j=0;$j<$colonne;$j++){
      echo '<td >'.$produit[$i][$j].'</td>';
     }
 }
 }
                                    
  elseif($r<=$produit[$i][1] && $prixmin<=$produit[$i][2] && $prixmax >= $produit[$i][2] && $prixmax>$prixmin && $prixmax!="" && $prixmin!="" && $r!=""){
if($produit[$i][1]<10){
                                                
     for($j=0;$j<$colonne;$j++){
 echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
    }
    }
    else {
      for($j=0;$j<5;$j++){
       echo '<td >'.$produit[$i][$j].'</td>';
         }
         }
     }
                                  
 }
                        
     echo '</tr>';     
         echo  '</tbody>
     </table> ';
  }   
    ?>


</body>
</html>