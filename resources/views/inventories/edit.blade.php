<form action="/inventories/{{$inventory->id}}/" method="POST">
  @csrf
  @method('PATCH')

  <label for="item_name">Item</label>
  <input type="text" name="item_name" id="item_name" value={{$inventory->item_name}}>

  <label for="description">Description</label>
  <input type="text" name="description" id="description" value={{$inventory->description}}>

  <label for="quantity">Quantity</label>
  <input type="text" name="quantity" id="quantity" value={{$inventory->quantity}}>
  
  <button type="submit">Create</button>
</form>