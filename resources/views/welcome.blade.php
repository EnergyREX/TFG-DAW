
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- HTML in your document's head -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/reset.css')
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <h1 class="">You are logged in!</h1>
        <div id="content"></div>
        @vite('resources/js/app.js')

    @endauth
    
    @guest
    <h1>Not Registred... or logged in!!</h1>
    <a href="/login">Log in</a>
    <a href="/register">Register</a>
    @endguest
</body>
</html>