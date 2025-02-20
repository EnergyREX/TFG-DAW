<x-layouts.auth>
    <x-slot:title>
        Log in our site | MyClinic
    </x-slot>
<main class="main">
    <div class="auth">
    <h1>Login - MyClinic</h1>

    <form method="POST" action="/login">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br />
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        @error('password')
        <p>{{$message}}</p>
        @enderror

        <button type="submit">Log in</button>
    </form>
    <p>Not registred? <a href="/register">Register</a></p>
    </div>
</main>
</x-layouts.auth>