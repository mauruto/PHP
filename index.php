<?php 

require_once ("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//Carrega lista de usuários
//$lista = Usuario::getList();
//echo json_encode(($lista));


//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("root","kkkkk");
//echo $usuario;

//inserir usuario com procedure
//$aluno = new Usuario("aluno","aluno123");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor","!@#$%¨&*");

echo $usuario;

?>