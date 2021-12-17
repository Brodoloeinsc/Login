<?php

    include('db.php');
    session_start();

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "SELECT * FROM `log` WHERE nome = '$nome' AND senha = md5('$senha')";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: ./admin.php");
    }else{
        header("Location: ./index.html");
    }

?>