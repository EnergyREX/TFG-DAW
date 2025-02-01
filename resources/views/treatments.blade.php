<div>
    <x-treatment-form />

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Last update</th>
        </thead>
        <tbody>
    @foreach ($treatments as $treatment )
    <tr>
        <td>{{$treatment->id}}</td>
        <td>{{$treatment->name}}</td>
        <td>{{$treatment->description}}</td>
        <td>{{$treatment->updated_at}}</td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
