@php
    $role = auth()->user()->getRole();
    echo $role->hasPermission('delete_appointments')
@endphp

<div>
    <x-navbar />
    <x-appointment-form />
    <table>
        <thead>
            <th>ID</th>
            <th>Doctor DNI</th>
            <th>Doctor Name</th>
            <th>Patient DNI</th>
            <th>Patient Name</th>
            <th>Hour</th>
            <th>Date</th>
            <th>Status</th>
            <th>Creation date</th>
            <th>Actions</th>
        </thead>
        <tbody>
    @foreach ($appointments as $appointment )
    <tr>
        <td>{{$appointment->id}}</td>
        <td>{{$appointment->doctor_dni}}</td>
        <td>{{$appointment->doctor_name}}</td>
        <td>{{$appointment->patient_dni}}</td>
        <td>{{$appointment->patient_name}}</td>
        <td>{{$appointment->hour}}</td>
        <td>{{$appointment->date}}</td>
        <td>{{$appointment->status}}</td>
        <td>{{$appointment->created_at}}</td>

        @if ($role->hasPermission('delete_appointments'))
        <td><form action="/appointments/{{$appointment->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DEL</button>
        </form></td>
        @endif
        @if ($role->hasPermission('edit_appointments'))
        <td><a href="/appointments/{{$appointment->id}}/edit">UPD</a></td>
        @endif
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
