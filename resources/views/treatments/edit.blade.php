<form action="/treatments/{{$treatment->id}}" method="POST">
  @csrf
  @method('PATCH')

  <label for="name">Treatment Name</label>
  <input type="text" name="name" id="name" value="{{$treatment->name}}">

  <label for="description">Treatment Description</label>
  <input type="textarea" name="description" id="description" value="{{$treatment->description}}">
  
  <button type="submit">Update</button>
</form>