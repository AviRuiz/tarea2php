<?php
/*Crear 5 variables de sesión y asignarles valores. Luego imprimir sus resultados en pantalla.*/
  // Iniciar la sesión
  session_start();

  // Asignar valores a las variables de sesión
  $_SESSION['var1'] = 'valor1';
  $_SESSION['var2'] = 'valor2';
  $_SESSION['var3'] = 'valor3';
  $_SESSION['var4'] = 'valor4';
  $_SESSION['var5'] = 'valor5';

  // Imprimir los valores de las variables de sesión
  echo $_SESSION['var1'];
  echo '<br>';
  echo $_SESSION['var2'];
  echo '<br>';
  echo $_SESSION['var3'];
  echo '<br>';
  echo $_SESSION['var4'];
  echo '<br>';
  echo $_SESSION['var5'];
?>
