
<div class="text-center" >
<a class="" href="{{ route('categories.create') }}">
    New
</a>

<table border="1">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Descripton</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="{{ route('categories.index') }}" >Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>