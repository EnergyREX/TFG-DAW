<form action="/roles" method="POST">
    @csrf

    <label for="name">Patient DNI</label>
    <input type="text" name="name" id="name">
    
    <button type="submit">Create</button>
</form>