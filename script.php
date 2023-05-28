<?php
include "i_connectionDb.inc";

/*********************Tea de login*********************/

//recebendo dados do form via POST
$v_email = $_POST['f_email'];
$v_senha = $_POST['f_senha'];

//buscando email e senh no banco banco de dados 
$sql="SELECT * FROM usuarios WHERE email = '$v_email' AND senha = '$v_senha'";
$res = mysqli_query($con, $sql);
$linha=mysqli_affected_rows($con);//numero de linhas restornadas

//gerando um cookie e logando no caso de $linha > 0;
if($linha > 0){
    $num=rand(100000, 900000); //gerando numero aleatório para o cookie
    setcookie("numLogin", $num);//guardando o numero no cookie
    header("Location: tela_inicial_logado.php?num1=$num");//direcionando para a pagina de logado
}else{
    //recarregando a pagina de login no caso de senha invalida;
    header("Location: tela_login.html");
}

mysqli_close($con);//fechando conexão com o banco 

/*********************Tea de cadastro*********************/

$v_password = $_POST['f_senha_cadastro'];
$v_confirmPassword = $_POST['f_Confirma_senha_cadastro'];

if ($f_senha == $v_confirmPassword){
    return 1;
}else{
    echo "As senhas não coencidem";
    }
/* 
if(isset($_POST['submit'])){
$v_name = $_POST['f_name'];
$v_nickName = $_POST['f_nickName'];
$v_cadEmail = $_POST['f_cadEmail'];
$v_senha = $_POST['$f_senha'];
}else{
    $insert = mysqli_query($conn, "INSERT INTO `usuarios` WHERE email = 'email' ") or die ('query failed');
}
echo "hello";
 */
?>
