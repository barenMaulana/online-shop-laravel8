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
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $key => $transaction)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $transaction->name }}</td>
            <td>{{ $transaction->email }}</td>
            <td>{{ $transaction->product_name }}</td>
            <td>{{ number_format($transaction->product_price) }}</td>
            <td class="d-flex justify-content-around">
                <form action="{{ url('admin/transactions/delete/'.$transaction->id) }}" method="post">
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
{{ $transactions->links() }}
@endsection