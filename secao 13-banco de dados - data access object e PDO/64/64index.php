<?php 

require_once("64b");
$sql = new Sql();
$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);