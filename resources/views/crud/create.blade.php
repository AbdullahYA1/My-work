@extends('index')
@section('content')
    <h1>Create New Item</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('crud.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <input type="number" name="old" placeholder="Enter age">
        <input type="textarea" name="description" placeholder="enter your description">
      
        <hr />
        <label for="show">Show Data</label>
        <input type="radio" name="show" value="1" id="show">
        <hr />

        <label for="hide">Hide Data</label>
        <input type="radio" name="show" value="0" id="hide">
        <hr />

        <label for="status">Show status</label>
        <select name="status">
            <option value="enable">Enable</option>
            <option value="disable">Disable</option>
        </select>
        <hr />
  <input type="submit" value="Create">
    </form>
@endsection

@push('js')
    <script>
        // alert('hello from the other side ')
    </script>
