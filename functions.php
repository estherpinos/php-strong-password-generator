
<?php

function generaPasswordCasuale($lunghezza) {
  $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-_?¿!ª@#~€¬><*';
  $password = '';
  
  for ($i = 0; $i < $lunghezza; $i++) {
      $index = rand(0, strlen($caratteri) - 1);
      $password .= $caratteri[$index];
  }
  
  return $password;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lunghezza = $_POST["lunghezza"];
  
  if (is_numeric($lunghezza) && $lunghezza > 0) {
      $password = generaPasswordCasuale($lunghezza);
      echo "Password casuale generata: " . $password;
  } else {
      echo "La lunghezza specificata non è valida.";
  }
}

?>