<html>
    <head>
    <link rel="stylesheet" media="screen"type="text/css"title="Design"href="fond.css"/>
        <body>
        <img src="Reserver2.jpg" width="1518" />
                <form action ="cible.php" method= "post">
                l'ID de la reservation<input type="text" name ="IDReservation"/>?><br/>
                   <?php
                inserer le ID du client     <input type="text" name ="IDClientR"/>?><br/>
                <?php
                inserer le ID Resto <input type ="text" name="IDRestoR"/>?><br/>
                <?php
                Choisir la date de reservation :<input type="date" name ="DateAReserver"/>?><br/>
                <?php
                Saisissez l'heure souhaitee:<input type="text" name ="Heure"/> ?><br/>
                <?php
                maintenat<input type="datetime-local" name ="DateReservation"/>?><br/>
                <?php
                Saisissez le nombre de place souhaite: <input type="text" name ="NbPlace"/>
                <input type="submit" value="Valider"/>
               
               
              

              
               
                </form>
           
           <?php 

             ?>
            
        </body>
    </head>
</html>