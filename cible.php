<html>
    <head>
        
    </head>
    <body>
          L'ID Client est le <?php echo $_POST['IDClientR'];?>
          L'ID Client est le <?php echo $_POST['IDClientR'];?>
          La reservation sera pour le <?php echo $_POST['DateAReserver'];?>
          La reservation sera a <?php echo $_POST['Heure'];?>
          La reservation a ete effectue a <?php echo $_POST['DateReservation'];?>
          Vous avez reserve pour<?php echo $_POST['NbPlace'];?>

          <?php
               $pdo = new PDO("mysql:host=localhost;dbname=gestionderestau","root","");
               $requete= $pdo->prepare("INSERT INTO reservation VALUES (?,?,?,?,?,?,?)");
               $requete->execute (array(null,$_POST['IDClientR'],$_POST['IDRestoR'],$_POST['DateAReserver'],$_POST['Heure'],$_POST['DateReservation'],$_POST['NbPlace']));
              ?>

          <p> raha anova anarana, <a href="cible.php"> clique ici </a> pour revenir à la cible.php</p>
          <pre>
          <?php
               $pdo = new PDO("mysql:host=localhost;dbname=gestionderestau","root","");
               $requete= $pdo->prepare("SELECT * FROM reservation");
               $requete->setFetchMode(PDO::FETCH_ASSOC);
               $requete->execute();
               $tab=$requete->fetchAll();
               ?><br/>
                   <?php
               
               for ($i=0;$i<count($tab);$i++){

                   echo $tab[$i]["IDReservation"]." ".$tab[$i]["IDClientR"]." ".$tab[$i]["IDRestoR"]." ".$tab[$i]["DateAReserver"]." ".$tab[$i]["Heure"]." ".$tab[$i]["DateReservation"]." ".$tab[$i]["NbPlace"];
                   ?><br/>
                   <?php
                }
               ?>
               </pre >
                 <?php
               $pdo = new PDO("mysql:host=localhost;dbname=gestionderestau","root","");
               $requete= $pdo->prepare("SELECT * FROM reservation");
               $requete->setFetchMode(PDO::FETCH_ASSOC);
               $requete->execute();
               $tab=$requete->fetchAll();
               for ($i=0;$i<count($tab);$i++){

                   echo "<tr>";
                   echo "  <td>  ".$tab[$i]["IDReservation"]."   </td>    " ;
                   echo "  <td>  ".$tab[$i]["IDClientR"]." </td> ";
                   echo "  <td>  " .$tab[$i]["IDRestoR"]." </td> ";
                   echo "  <td>  ".$tab[$i]["DateAReserver"]." </td> ";
                   echo "  <td>  ".$tab[$i]["Heure"]." </td> ";
                   echo "  <td>  ".$tab[$i]["DateReservation"]." </td>";
                   echo "  <td>  ".$tab[$i]["NbPlace"]."</td>";
                   echo "  </tr> ";
                   ?><br/>
                   <?php
                }
               ?>
            
        </body>
</html>