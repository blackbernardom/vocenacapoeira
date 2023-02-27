
<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');

$nome = $_POST ['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = sha1($_POST['senha']);
//$sexo = $_POST ['sexo'];

//echo "Nome digitado:  {$nome} <br/>";
//echo "Nome digitado:  {$email} <br/>";
//echo "Nome digitado:  {$login} <br/>";
//echo "Nome digitado:  {$senha} <br/>";
//echo "Sexo digitado:  {$sexo} <br/>";


//echo "Bem vindo " . $login;
//echo "</br>";
//echo "Senha digitada: " . $senha;


// Conexão com o banco de dados
$conexao = new PDO("mysql:host=localhost; dbname=capoeira; charset=utf8", "root", "");


//inserindo no banco de dados

$iserir_dados = $conexao->prepare(" INSERT INTO usuarios (nome,email,login,senha) values (?,?,?,?)");

// Envia para o banco de dados
$iserir_dados->execute(array($nome,$email,$login,$senha));

// Captura o restultado da consulta
$resultado = $iserir_dados->rowCount();

if($resultado == 0) {
	echo "erro na inserção da informação.";
}else {
	header("Location: index.html");
	echo "Dados enviados com sucesso!!!";
}
