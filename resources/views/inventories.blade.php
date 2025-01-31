<div>
    <x-inventory-form />

    <table>
        <thead>
            <th>ID</th>
            <th>Item</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Last update</th>
        </thead>
        <tbody>
    @foreach ($inventories as $inventory )
    <tr>
        <td>{{$inventory->id}}</td>
        <td>{{$inventory->item_name}}</td>
        <td>{{$inventory->description}}</td>
        <td>{{$inventory->quantity}}</td>
        <td>{{$inventory->updated_at}}</td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
