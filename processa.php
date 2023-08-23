<?php
// Report all PHP errors
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 1);

//include_once("conexao.php");
require("conexao.php");

/*
$UsuarioNome   = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$UsuarioEmail  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
*/

$UsuarioNome   = $_POST['nome'];
$UsuarioEmail  = $_POST['email'];

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$qUsuario = "   INSERT INTO usuarios (nome, email, created) 
                VALUES('$UsuarioNome','$UsuarioEmail', NOW())";

if (!($rUsuario = mysqli_query($conn, $qUsuario))){
    print "Erro ao executar cadastro;";
   /* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.html';
header("Location: http://$host$uri/$extra");
exit;
    
} else {
    $UsuarioID = mysqli_insert_id($conn);
    print "Cadastro realizado com sucesso!";
    print "<br><br>";
    print "<br>Nome: ".$UsuarioNome;
    print "<br>E-mail: ".$UsuarioEmail;
    print "<br>ID: ".$UsuarioID;
}
/*
if($UsuarioID = mysqli_insert_id($conn)) {
print "OK insert";

}else{
print "Erro insert";
}
*/