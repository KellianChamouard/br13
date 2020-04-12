<?php

  try {
    $bdd = new PDO('mysql:host=localhost; dbname=brxiii', 'root', 'root');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

?>