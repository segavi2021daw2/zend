<?php
  if( ($_POST["nom"]=="admin") && ($_POST["ctsnya"]=="fjeclot") ) {
     echo "Benvingut ". $_POST['nom']. "</br>";
     
    echo "<a href='crearUsuari.html'>Crear usuaris</a>";
    
     exit(0);
  }
  else {
	  echo "No tens permís per accedir a aquesta web<br>";
	  exit(1);
  }
?>
