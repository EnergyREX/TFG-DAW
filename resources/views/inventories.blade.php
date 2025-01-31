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
    @foreach ($inventories as $inventories )
    <tr>
        <td>{{$inventories->id}}</td>
        <td>{{$inventories->item_name}}</td>
        <td>{{$inventories->description}}</td>
        <td>{{$inventories->quantity}}</td>
        <td>{{$inventories->updated_at}}</td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
