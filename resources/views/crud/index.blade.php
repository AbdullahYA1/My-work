@extends('index')
@section('content')
    <h2 class="mb-4">I want to learn Laravel</h2>
    <a href="{{ route('crud.create') }}" class="btn btn-primary mb-3">Create New</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Description</th>
                <th>status</th>
                <th>show</th>
                <th>Created At</th>
                <th colspan="6" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @each('crud.data',$crud,'data')
        </tbody>
    </table>
@endsection

@stack('js')

