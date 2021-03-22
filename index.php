<?php

require_once("config.php");

//$usuario = new Usuario();

//$usuario -> loadById(2);

//echo $usuario;


//$lista = Usuario::getList();

//echo json_encode($lista);

//$bylogin = Usuario::search("pl");

//echo json_encode($bylogin);

//$autenticar = new Usuario();

//$autenticar->login("Plancto","senha05");

//echo $autenticar;

//$aluno = new Usuario("LOGIN","SENHA");

//$aluno -> insert();

//echo $aluno;

//$usuario = new Usuario();

//$usuario -> loadById(6);

//$usuario -> update("professor","professor");

//echo $usuario;

$usuario = new Usuario();

$usuario -> loadById(7);

$usuario -> delete();

echo $usuario;


?>