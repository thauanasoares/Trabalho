<?php 

    $usuario = $_POST["user"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM login WHERE usuario='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=localhost; dbname=listadetarefas', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id_usuario'];

    if($logado == null){
        //usuário ou senhas invalidas
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: novatarefa.php');

        die();
    }
    ?>