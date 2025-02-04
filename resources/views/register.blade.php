<main class="flex ">
    <x-navbar />
    <h1>Register - MyClinic</h1>
    <form method="POST" action="/register">
        @csrf
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni">
        <br />
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br />
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
        <br />
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        <br />
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number">
        <br />
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br />
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br />
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br />
        <button type="submit">Register</button>
    </form>    
</main>
