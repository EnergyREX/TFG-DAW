<x-layout>
    <x-slot:title>
        Register in our site | MyClinic
    </x-slot>
<main class="flex ">
    <x-navbar />
    <h1>Register - MyClinic</h1>
    <form method="POST" action="/register">
        @csrf
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni">
        <br />
        @error('dni')
            <p>{{$message}}</p>
        @enderror

        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br />
        @error('name')
        <p>{{$message}}</p>
        @enderror
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
        <br />
        @error('surname')
        <p>{{$message}}</p>
        @enderror
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        <br />
        @error('address')
        <p>{{$message}}</p>
        @enderror
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number">
        <br />
        @error('phone_number')
        <p>{{$message}}</p>
        @enderror
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br />
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br />
        @error('password')
        <p>{{$message}}</p>
        @enderror
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br />
        @error('password_confirmation')
        <p>{{$message}}</p>
        @enderror
        <button type="submit">Register</button>
    </form>    
</main>
</x-layout>