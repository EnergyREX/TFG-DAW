<form action="/inventories" method="POST">
    @csrf

    <label for="item_name">Item</label>
    <input type="text" name="item_name" id="item_name">

    <label for="description">Description</label>
    <input type="text" name="description" id="description">

    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity">
    
    <button type="submit">Create</button>
</form>