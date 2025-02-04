<div>
    <x-navbar />
    <x-medicalrecord-form />

    <table>
        <thead>
            <th>ID</th>
            <th>Patient DNI</th>
            <th>Details</th>
            <th>Created_at</th>
            <th>Last update</th>
        </thead>
        <tbody>
    @foreach ($medicalrecords as $medicalrecord )
    <tr>
        <td>{{$medicalrecord->id}}</td>
        <td>{{$medicalrecord->patient_dni}}</td>
        <td>{{$medicalrecord->details}}</td>
        <td>{{$medicalrecord->created_at}}</td>
        <td>{{$medicalrecord->updated_at}}</td>
        <td><form action="/medicalrecords/{{$medicalrecord->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DEL</button>
        </form></td>
        <td><a href="/medicalrecords/{{$medicalrecord->id}}/edit">UPD</a></td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
