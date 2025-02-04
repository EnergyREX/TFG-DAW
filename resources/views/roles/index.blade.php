<div>
    <x-navbar />
    <x-role-form />

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Created_at</th>
            <th>Last update</th>
        </thead>
        <tbody>
    @foreach ($roles as $role )
    <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
        <td>{{$role->created_at}}</td>
        <td>{{$role->updated_at}}</td>
        <td><form action="/roles/{{$role->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DEL</button>
        </form></td>
        <td><td><a href="/roles/{{$role->id}}/edit">UPD</td></td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
