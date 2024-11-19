<?php 
include 'conexao.php';
$id = $_GET["id_tarefa"];

if(isset($_GET['id_tarefa'])){
    $sqlDelete = mysqli_query($conn, "DELETE FROM tarefas WHERE id_tarefa = {$id}")
    or die (mysqli_error($conn));

    header('location: tabela.php');
}
?>