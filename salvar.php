<?php
    include "conexao.php";

    $tarefa = $_POST["tarefa"];
    $quantidade = $_POST["quantidade"];

    $sql = "INSERT INTO tarefas (tarefa, quantidade) VALUES ('$tarefa', $quantidade)";

    $res = $conn->query($sql);

    if ($res) {
        header("Location: tabela.php");
    } 
?>