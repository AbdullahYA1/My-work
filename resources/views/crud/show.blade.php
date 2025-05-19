@extends('index')
@section('content')
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Description</th>
            <th>show</th>
            <th>status</th>
            <th>Created At</th>
            <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($crud as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->old }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->show ==1 ? "show" : 'hidden' }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->created_at }}</td>
                <td><a href="{{ url('crud/' . $data->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a></td>
                <td>
                    <form action="{{ route('crud.destroy', ['crud' => $data->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection