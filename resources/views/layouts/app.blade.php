<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="h-40 w-full bg-amber-200">
    <h1 class="text-2xl font-semibold text-center">header</h1>
</div>
<div class="max-w-7xl min-h-screen mx-auto p-6">
    @yield('content')
</div>
<div class="h-32 w-full bg-amber-200">
    <h1 class="text-2xl font-semibold text-center">footer</h1>
</div>
</body>
</html>
