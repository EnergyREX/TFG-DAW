<x-layouts.auth>
    <x-slot:title>
        Register in our site | MyClinic
    </x-slot>
<main class="main">
    <div class="auth-reg">
    <h1>Register - MyClinic</h1>
    <form method="POST" action="/register">
        @csrf
        <div>
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni">
        
        @error('dni')
            <p>{{$message}}</p>
        @enderror

        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        
        @error('name')
        <p>{{$message}}</p>
        @enderror

        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
        
        @error('surname')
        <p>{{$message}}</p>
        @enderror

        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        
        @error('address')
        <p>{{$message}}</p>
        @enderror

        </div>

        <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number">
        
        @error('phone_number')
        <p>{{$message}}</p>
        @enderror

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        
        @error('email')
        <p>{{$message}}</p>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        @error('password')
        <p>{{$message}}</p>
        @enderror

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        
        @error('password_confirmation')
        <p>{{$message}}</p>
        @enderror

        </div>
        <button class="register-btn" type="submit">Register</button>
    </form>
    <p>Already registred? <a href="/login">Log in.</a></p>
    </div>    
</main>
</x-layouts.auth>