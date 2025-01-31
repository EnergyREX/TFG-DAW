<form action="/treatments" method="POST">
    @csrf

    <label for="name">Treatment Name</label>
    <input type="text" name="name" id="name">

    <label for="description">Treatment Description</label>
    <input type="textarea" name="description" id="description">
    
    <button type="submit">Create</button>
</form>