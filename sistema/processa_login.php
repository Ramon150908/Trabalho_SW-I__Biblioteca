<?php
session_start();
    include_once 'conexao.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $consulta = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($consulta);

    $stmt ->bindParam(":email", $email);
    $stmt ->bindParam(":senha", $senha);

    $stmt->execute();

    $registros = $stmt->rowCount();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    //\\var_dump($resultado);

    //echo "Registros Encontrados ==> $registros";

    if ($registros == 1) {
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        //echo "Achei o cara"; 
        header("Location: restrita.php");  // a função 'header' empurra o usuario para uma página específica
    } else {
        //echo "Não achei o cara";
        header("Location: index.php");
    }
    
    ?>