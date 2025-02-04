<form action="/appointments/{{$appointments->id}}" method="POST">
  @csrf
  @method('PATCH')

  <label for="hour">Hour</label>
  <input type="time" name="hour" id="hour">

  <label for="date">Date</label>
  <input type="date" name="date" id="date">

  <label for="status">Status</label>
  <select name="status" id="status">
    <option></option>
    <option>Pending</option>
    <option>Confirmed</option>
    <option>Cancelled</option>
    <option>Completed</option>
  </select>
    
  <button type="submit">Update</button>
</form>