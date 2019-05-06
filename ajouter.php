<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="other.css">
    <title>Add</title>
</head>
<body>

               <div class="produit">Ajouter produits</div>
               <form action="" method="POST">
           
     
            <input name="produits" type="text" placeholder="produits"/>
  
            <input name="Prix" type="number" placeholder="prix"/>

             <input name="Quantite" type="number" placeholder="quantite"/>
             <button type="submit"  name="ok" class="btn btn-primary" >ajouter</button>
</form> <br> <br> <br>
  
                            
             <?php
       $produits = array(

        array("Nom", "Prix","Quantité","Montant"), 
        array("Orange", 1000,80,1000*80), 
        array("banane", 2000,60,2000*60),
        array("Pomme", 3000,50,3000*50), 
        array("Mandarin", 4000,40,4000*40), 
        array("Melon", 5000,30,5000*30), 
        array("Pasteque", 6000,20,6000*20),
        array("Fraises", 7000,10,7000*10), 
        array("Papaye", 8000,6,8000*6)

    );

       $prix = null;
       $nom = null;
       $quantite = null;
    if (isset($_POST['ok']))
    {
      $nom= $_POST['produits'];
       $prix=$_POST['Prix'];
       $quantite=$_POST['Quantite'];
      }
         $mnt=$prix*$quantite;
    array_push($produits,array ("$nom","$prix","$quantite","$mnt" ));
    echo ' <table border=1  class="t">';

        for($i=0; $i<count($produits);$i++)
    
    {
        if ($produits[$i][0]!="") {
        echo'<tr style=""> <th>'.$produits[$i][0].'</th>';
        echo'<th>'.$produits[$i][1].'  </th>';
        echo '<th> '.$produits[$i][2].' </th>';
        echo '<th>'.$produits[$i][3].'  </th>';
        echo '</tr>';
    }

}
    echo" </table>";









      // $_POST['produits'],$_POST['p'],$_POST['n']
    //  include ("listerProduits.php");
    // echo '<table border=1 width=100% height=80%>';
    // echo "<tr>";
    //    echo '<td width=22.5%>'.$_POST['produits'].'</td>';
    //    echo '<td width=14.5%>'.$_POST['p'].'</td>';
    //    echo '<td width=25%>'.$_POST['n'].'</td>'; 
    //    $mnt=$_POST['p']*$_POST['n'] ; 
    //    echo '<td width=%>'.$mnt.'</td>';
    //    echo"</tr>" ;
    // echo " </table>";
    ?>
</body>
</html>