<?php 
session_start();
include_once ("conexao.php");
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$pedido = filter_input(INPUT_POST, 'pedido',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_NUMBER_INT);
$endereço = filter_input(INPUT_POST, 'endereço',FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento',FILTER_SANITIZE_STRING);
$CEP = filter_input(INPUT_POST, 'CEP',FILTER_SANITIZE_NUMBER_INT);
$bairro = filter_input(INPUT_POST, 'bairro',FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado',FILTER_SANITIZE_STRING);
$CNPJ = filter_input(INPUT_POST, 'cnpj',FILTER_SANITIZE_NUMBER_INT);

$result_usuario= "INSERT INTO usuario (nome,email,pedido,cpf,endereço,complemento,CEP,bairro,estado,cnpj)VALUES ('$nome','$email','$pedido','$cpf','$endereço','$complemento','$CEP','$bairro','$estado','$CNPJ')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
    header("location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não cadastrado com sucesso";
    header("location: index.php");
    
}

?>