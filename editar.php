<?php
      include 'conexao.php';

    if(isset($_GET['id_tarefa'])){
        $id = $_GET['id_tarefa'];
        $sql = mysqli_query($conn, "SELECT * FROM tarefas WHERE id_tarefa = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $tarefa = $n['tarefa'];
            $quantidade = $n['quantidade'];
            
            
        }
    }

    if(isset($_POST['editar'])){
        $id = $_GET["id_tarefa"];
        $tarefa = $_POST["tarefa"];
        $quantidade = $_POST["quantidade"];
        

        $queryUpdate = "UPDATE tarefas SET tarefa = '$tarefa', quantidade = '$quantidade' WHERE id_tarefa = $id";
        $consulta = mysqli_query($conn, $queryUpdate);
        header('location: tabela.php');
    }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form  method="post" class="p-10">
        <h2 class="text-2xl">Atualizar tarefa</h2>
        <br>
        <input type="text" name="tarefa" placeholder="Tarefa" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="quantidade" placeholder="Quantidade de tarefas" class="w-50 border border-1 border-black px-4 py-2">
        <button name="editar" class="px-4 py-2 bg-red-800 text-white rounded font-bold">Atualizar</button>
    </form>
</body>
</html>