<form action="/medicalrecords" method="POST">
    @csrf

    <label for="patient_dni">Patient DNI</label>
    <input type="text" name="patient_dni" id="patient_dni">

    <label for="details">Details</label>
    <input type="text" name="details" id="details">
    
    <button type="submit">Create</button>
</form>