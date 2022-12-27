<?php
/*Crear dos variables cookies y asignarles valores e imprimir sus resultados*/

  // Crear la cookie "cookie1" con un valor de "valor1" y una expiración de una hora a partir de ahora
  setcookie('cookie1', 'valor1', time() + 3600);

  // Crear la cookie "cookie2" con un valor de "valor2" y una expiración de una semana a partir de ahora
  
  setcookie('cookie2', 'valor2', time() + 604800);

  // Imprimir los valores de las cookies
  echo $_COOKIE['cookie1'];
  echo '<br>';
  echo $_COOKIE['cookie2'];
?>
