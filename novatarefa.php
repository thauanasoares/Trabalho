<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="salvar.php" method="post" class="p-10">
        <h2 class="text-2xl">Tarefa</h2>
        <br>
        <input type="text" name="tarefa" placeholder="Tarefa" class="w-50 border border-1 border-black px-4 py-2">
        <input type="number" name="quantidade" placeholder="Quantidade de tarefas" class="w-50 border border-1 border-black px-4 py-2">
        <button class="px-4 py-2 bg-red-800 text-white rounded font-bold">Cadastrar</button>
    </form>
</body>
</html>