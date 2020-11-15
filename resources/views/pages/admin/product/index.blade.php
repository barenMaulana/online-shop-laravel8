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

<div class="row my-2">
    <div class="col">
    <a href="{{ url('admin/products/create') }}"><i class="fa fa-plus"></i> produk baru</a>
    </div>
</div>
<div class="table-responsive bg-light">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td><img src="{{ asset('storage/'.$product->product_image) }}" width="60"></td>
                <td>{{ $product->product_name }}</td>
                <td>{{ number_format($product->product_price) }}</td>
                <td>{{ $product->product_qty }}</td>
                <td class="d-flex justify-content-around">
                    <a href="{{ url('admin/products/detail/'.$product->id) }}" class="mx-1"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('admin/products/edit/'.$product->id) }}" class="mx-1"><i class="fa fa-pencil-alt"></i></a>
                    <form action="{{ url('admin/products/delete/'.$product->id) }}" method="post">
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
{{ $products->links() }}
@endsection