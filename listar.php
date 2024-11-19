<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM tarefas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                <tr>
                <td class='text-center'>ID</td>                
                <td class='text-center'>Tarefa</td>                
                <td class='text-center'>Quantidade de tarefas</td>                
                <td class='text-center'>Funções</td>                
            </tr>
        ";
        while ($a = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-4'>" . $a['id_tarefa'] . "</td>
                    <td class='p-4'>" . $a['tarefa'] . "</td>
                    <td class='p-4'>" . $a['quantidade'] . "</td>
                    <td><a class='bg-red-800 text-white rounded px-4 py-2' href='editar.php?id_tarefa=".$a['id_tarefa']."'>Editar</a><td>
                    <td><a class='bg-red-800 text-white rounded px-4 py-2' href='deletar.php?id_tarefa=".$a['id_tarefa']."'>Deletar</a><td>
                </tr>
            ";
        }

        echo "</table>";
    }
?>
