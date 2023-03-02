<?php 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "Walter" && $senha == 123678){
    header("location: painel.php");
}else {
    header("location: usuario-invalido.php");
}

?>