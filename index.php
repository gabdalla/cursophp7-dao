<?php

require_once("config.php");

/*
$root = new Usuario();
$root->loadById(4);
echo $root;
*/

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "roott");
//echo $usuario;

/*
// Criando um novo usuário
$aluno = new Usuario("aluno", "@alun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;

?>