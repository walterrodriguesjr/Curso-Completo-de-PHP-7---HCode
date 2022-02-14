<?php 

session_id('f8umqf819ifvk7apqhe0eqjhbt');

require_once "./config.php";

session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>