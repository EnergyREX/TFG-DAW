<div>
    <x-appointment-form />
    <table>
        <thead>
            <th>ID</th>
            <th>Doctor DNI</th>
            <th>Patient DNI</th>
            <th>Hour</th>
            <th>Date</th>
            <th>Status</th>
            <th>Creation date</th>
        </thead>
        <tbody>
    @foreach ($appointments as $appointment )
    <tr>
        <td>{{$appointment->id}}</td>
        <td>{{$appointment->doctor_dni}}</td>
        <td>{{$appointment->patient_dni}}</td>
        <td>{{$appointment->hour}}</td>
        <td>{{$appointment->date}}</td>
        <td>{{$appointment->status}}</td>
        <td>{{$appointment->created_at}}</td>
        <td><form action="/appointments/{{$appointment->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DEL</button>
        </form></td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
