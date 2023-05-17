<?php
  function generatePassword($length) { //creo funzione, riceve parametro length
    $list = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!£$%&/()=@#[]{},;.:-_'; //creo una lista di lettere e simboli
    $password = '';

    for ($i = 0; $i < $length; $i++) { //creo ciclo per ottenere un index casuale dell'array $list finché non arriva al length
      $randomIndex = rand(0, strlen($list) - 1);
      $password .= $list[$randomIndex];
    }

    return $password;
  }
?>