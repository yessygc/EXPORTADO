
<?php
  
  $nombre="Ivan";
  $password="Cisco";
  
  if ($nombre=="Ivan"&& $password=="Cisco"){
      echo("Entraste al sistema y puedes accesar al menu 1.- Cajero");
    
  }
  else if ($nombre=="Ivan"&& $password!="Cisco"){
      echo("La contraseña en incorrecta")
  }
  else if ($nombre!="Ivan"&& $password=="Cisco"){
    echo("El usuario en incorrecto")
  }
  else
    echo("El usuario y contraseña son incorrectos". $nombre. $password)
}
  
  
  
  
  
  ?>