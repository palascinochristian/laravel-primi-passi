<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Tailwind CSS via CDN -->
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <nav class="text-center space-y-4">
        <h1 class="text-3xl font-bold">Hello World</h1>
        <a href="{{ route('home') }}" class="block text-xl text-blue-600 hover:underline">Home</a>
        <a href="{{ route('about') }}" class="block text-xl text-blue-600 hover:underline">About Us</a>
        <a href="{{ route('contacts') }}" class="block text-xl text-blue-600 hover:underline">Contatti</a>
    </nav>
</body>
</html>
