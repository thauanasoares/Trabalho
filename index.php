<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="login.php" method="post" class="p-10">
        <h2 class="text-2xl">Entrar</h2>
        <br>
        <input type="text" name="user" placeholder="Usuario" class="w-50 border border-1 border-black px-4 py-2">
        <input type="password" name="senha" placeholder="Senha" class="w-50 border border-1 border-black px-4 py-2">
        <button class="px-4 py-2 bg-red-800 text-white rounded font-bold">Entrar</button>
    </form>
</body>
</html>