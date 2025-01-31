<form action="/appointments" method="POST">
    @csrf

    <label for="patient_dni">Patient DNI</label>
    <input type="text" name="patient_dni" id="patient_dni">

    <label for="doctor_dni">Doctor DNI</label>
    <input type="text" name="doctor_dni" id="doctor_dni">

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
    
    <button type="submit">Create</button>
</form>