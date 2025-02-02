<form action="/roles/{{$role->id}}" method="POST">
  @csrf
  @method('PATCH')

  <label for="name">Treatment Name</label>
  <input type="text" name="name" id="name" value="{{$role->name}}">
  
  <button type="submit">Update</button>
</form>