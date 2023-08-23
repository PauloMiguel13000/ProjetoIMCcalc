<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "animais";
//criar conexao 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
    /* Use your preferred error logging method here */
    print 'Connection error: ' . mysqli_connect_error();
}