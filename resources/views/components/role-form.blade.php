<form action="/roles" method="POST">
    @csrf

    <label for="name">Role Name</label>
    <input type="text" name="name" id="name">
    
    <button type="submit">Create</button>
</form>