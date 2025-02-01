<div>
    <x-navbar />
    <x-treatment-form />

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Last update</th>
            <th>Actions</th>
        </thead>
        <tbody>
    @foreach ($treatments as $treatment )
    <tr>
        <td>{{$treatment->id}}</td>
        <td>{{$treatment->name}}</td>
        <td>{{$treatment->description}}</td>
        <td>{{$treatment->updated_at}}</td>
        <td><form action="/treatments/{{$treatment->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DEL</button>
        </form></td>
        <td><a href="/treatments/{{$treatment->id}}/edit">UPD</td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
