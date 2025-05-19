<tr>
    <td>{{ $data->name }}</td>
    <td>{{ $data->old }}</td>
    <td>{{ $data->description }}</td>
    <td>{{ $data->show == 1 ? 'show' : 'hidden' }}</td>
    <td>{{ $data->status }}</td>
    <td>{{ $data->created_at }}</td>
    <td>
    <td>
        <td><a href="{{ route('crud.edit', ['crud' => $data->id]) }}" class="btn  btn-warning">Edit</a></td>
        <td><a href="{{ route('crud.show', ['crud' => $data->id]) }}" class="btn  btn-info">Show</a></td>

    </td>
    </td>
    <td>
        <form action="{{ route('crud.destroy', ['crud' => $data->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </form>
    </td>
</tr>