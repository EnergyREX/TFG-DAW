<x-layout>
    <x-slot:title>
        MyClinic Landing
    </x-slot>
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
</x-layout>