@extends('layouts.Admin')
@section('content')
@if (session()->has('status'))    
<div class="row">
    <div class="col">
        <div class="alert alert-success">
            {{ session()->get('status') }}
        </div>
    </div>
</div>
@endif

<div class="table-responsive bg-light">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->roles }}</td>
            <td class="d-flex justify-content-around">
                <a href="{{ url('admin/users/edit/'.$user->id) }}" class="mx-1"><i class="fa fa-pencil-alt"></i></a>
                <form action="{{ url('admin/users/delete/'.$user->id) }}" method="post">
                    @csrf
                    <div class="mx-1"><button type="submit" onclick="return confirm('data akan terhapus')" class="fa fa-trash" style="border:none;color:red"></button></div>
                </form>
            </td>
        <tr>
        @endforeach
    </tbody>
</table>
</div>
<br>
{{ $users->links() }}
@endsection