<?php

require_once("config.php");


// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


// Carrega um usuário
	// $root = new Usuario();
	// $root->loadById(3);
	// echo $root;



// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);



// Carrega uma lista de usuário buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);



// Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("joao", "123765");
// echo $usuario;


//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;



// Atualizando o usuário
// $usuario = new Usuario();

// $usuario->loadById(8); //pegando qual tabela através do id para alterar os dados

// $usuario->update("professor", "!@#$%¨¨&*");

// echo $usuario;


//Deletando um usuário
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
?>