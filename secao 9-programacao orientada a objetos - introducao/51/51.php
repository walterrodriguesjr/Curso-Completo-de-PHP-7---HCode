<?php 

spl_autoload_register(function($nomeClasse){

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
    var_dump($nomeClasse);
}

  $carro = new delRey();      
  $carro->acelerar(80);

?>