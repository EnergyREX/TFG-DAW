<div>
    <h1>Login - MyClinic</h1>

    <form method="POST" action="/login">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br />
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Log in</button>
    </form>
</div>
