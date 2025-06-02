@extends('index')
@section('content')
    <h1>Update Item</h1>
    <form action="{{ route('crud.update', ['crud' => $crud->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="name" placeholder="Enter name" value="{{ $crud->name }}">

        <input type="number" name="old" placeholder="Enter age" value="{{ $crud->old }}">

        <textarea name="description" placeholder="Enter your description">{{ $crud->description }}</textarea>

        <input type="submit" value="Update">
        <hr />
        <label for="show">Show Data</label>
        <input type="radio" name="show" value="1" @checked($crud->show == 1) id="show">
        <hr />

        <label for="hide">Hide Data</label>
        <input type="radio" name="show" value="0" @checked($crud->show == 0) id="hide">
        <hr />

        <label for="status">Show status</label>
        <select name="status">
            <option @selected($crud->status == 'enable') value="enable">Enable</option>
            <option @selected($crud->status == 'disable') value="disable">Disable</option>
        </select>
        <hr />
        <label for="photo">Upload Photo</label>
        <input type="file" placeholder="photo" name="photo">
        <hr />
    </form>
@endsection
