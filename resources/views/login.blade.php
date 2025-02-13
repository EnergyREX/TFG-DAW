<div>
    <x-navbar />
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
</div>
