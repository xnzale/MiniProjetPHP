<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="other.css">
    <title>listeProduits</title>
</head>
<body>
<?php
                                    $tableau = ['Nom','Prix', 'Quantite', 'Montant','Ordinateur','500€','150','75000',
                                        
                                    'Congelateur','414€','70','28980','Ascenseur','800€','7','78400',
                                    'Home-Cinema','200€','50',10000,'Smartphone','124€','98','12152',
                                    'Sonnette Electrique','101€','800','80800','Climatiseur','250€','500','125000',
                                    'Aspirateur','123€','27','3321','Meuble-Connecte','510€','77','39270',
                                    'Panneaux-Solaire','313€','274','85762',
                                    ];
                                        
                            // -------------------------------------------------------
                            $NbreData = sizeof($tableau);
                            // -------------------------------------------------------
                            // affichagem
                            $NbrCol = 4;
                            $NbrLigne = 0;
                            if ($NbreData != 0) {
                            $k = 0;
                            $j = 1;
                                echo '<table border="1">';
                                    while ($k < $NbreData) {
                                    if ($j%$NbrCol == 1) {
                                        $NbrLigne++;
                                            echo "<tr>";
                                $fintr = 0;
                                }
                                            echo '<td>';
                                            // ------------------------------------------
                                            // AFFICHAGE de l'element
                                            echo $tableau[$k];
                                            // ------------------------------------------
                                            echo '</td>';
                                            $k++;
                                            if ($j%$NbrCol == 0) {
                                            echo "</tr>"; 
                                            $fintr = 0;
                                            }
                                            $j++;
                                        }
                                           
                                        if ($fintr!=1) { echo '</tr>'; }
                                        echo '</table>';
                                        } else {
                                        echo 'pas de données à afficher';
                                        }
      ?>
</body>
</html>