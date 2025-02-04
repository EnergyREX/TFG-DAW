<form action="/medicalrecords/{{$medicalrecord->id}}" method="POST">
  @csrf
  @method('PATCH')

  <label for="patient_dni">Patient_Dni</label>
  <input type="text" name="patient_dni" id="patient_dni" value="{{$medicalrecord->patient_dni}}">

  <label for="details">Details</label>
  <input type="text" name="details" id="details" value="{{$medicalrecord->details}}">
  
  <button type="submit">Update</button>
</form>