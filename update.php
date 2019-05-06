<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="other.css">
    <title>Mise a jour </title>
</head>
<body>
    <form action="" method="post">
Nom produits: <input type="text" name="produits" placecholder="produits">
Prix: <input type="number" name="prix"  placecholder="prix">
Quantité: <input type="number" name="qtte"  placecholder="Quantité">
<button name="mod" type="submit"> Modifier</button>
    </form>

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
                    array("Papaye", 8000,6,8000*6),
             );
                    echo ' <table border=1 class="t">';
                    echo'<tr style=""> <th> Nom </th>';
                    echo'<th> prix </th>';
                    echo '<th> Quantité </th>';
                    echo '<th> montants </th>';
                    echo '</tr>';

                    if(isset($_POST['mod']) ){
                        $nom=$_POST['produits'];
                            echo "<tr>";
                            for($ligne=0;$ligne<count($produits);$ligne++){

                                if($produits[$ligne][0]== $nom){
                                $produits[$ligne][0]=$_POST['produits'];
                                $produits[$ligne][1]=$_POST['prix'];
                                $produits[$ligne][2]=$_POST['qtte'];
                                }
                        }
                        echo "</tr>";

                    }

                    for( $ligne=0; $ligne<=count($produits); $ligne++){
                        echo '<tr>';
                        for($col=0;$col<4;$col++){
                            echo "<td>" .$produits[$ligne][$col]."</td>";
                    }
                    echo"</tr>" ;
                    }
                    echo" </table>";  
                ?>
    
</body>
</html>