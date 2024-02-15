<?php
session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT usuario FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows == 1) {
        $_SESSION["usuario"] = $usuario;
        header("Location: cadastro.html");
    } else {
        echo "<script>alert('Usuário ou senha inválidos!');</script>";
    
    }
}
?>
