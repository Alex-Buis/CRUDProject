<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Home</title>
</head>
<body class="flex flex-col justify-between h-screen">
    <div class="bg-red-800 text-gray-300 py-8 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center">
        <h1>
            <a href="/">Home</a>
        </h1>
        <nav>
            <a href="/create">Créer</a>
            <a href="/index">Liste</a>
            <a href="/modifier">Edit</a>
        </nav>
            </div>
        </div>
    </div>
@yield('content')
    <footer class="bg-green-800 text-gray-300 py-8">
        <div class="max-w-5xl mx-auto px-3">
        <p>Footer</p>
        </div>
    </footer>
</body>
</html>