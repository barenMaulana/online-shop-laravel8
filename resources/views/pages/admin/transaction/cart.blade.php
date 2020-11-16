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
@if (count($transactions) == 0)
<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron bg-light">
        <h1 class="display-4">belanja yuk!</h1>
        <p class="lead">belanja mudah murah dan menyenangkan.</p>
        <hr class="my-4">
        <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ url('/products') }}" role="button">Pilih produk</a>
        </p>
      </div>
    </div>
  </div>
</div>
@else
<div class="container">
  <div class="text-center">
  <h1>Checkout</h1>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mx-auto">
          <div class="card shadow">
          <div class="card-body">
              <h5 class="card-title text-center">SportLine shop</h5>
              <hr>
              @foreach ($transactions as $transaction)
                  <div class="row d-flex justify-content-between px-4">
                      <p class="card-text">{{ $transaction->product_name }}</p>
                  <p class="card-text">Rp.{{ number_format($transaction->product_price) }} <a href="{{ url('admin/transactions/hapus-belanja/'.$transaction->id) }}" onclick="return confirm('pesanan akan terhapus')" class="text-danger ml-2">x</a></p>
                  </div>  
              @endforeach
              <hr>
              <div class="row d-flex justify-content-between px-4">
                  <p class="card-text">Total</p>
              <p class="card-text"><b>Rp.{{ number_format($total) }}</b></p>
              </div>  
              <hr>
              <div class="row d-flex justify-content-between px-4">
                <p class="card-text">pembeli</p>
                <p class="card-text">{{ $transactions[0]->name }}</p>
              </div> 
              <div class="row d-flex justify-content-between px-4">
                <p class="card-text">email</p>
                <p class="card-text">{{ $transactions[0]->email }}</p>
              </div>    
              {{-- buat button ren --}}
              <div class="row">
                <div class="col">
                  <button class="btn btn-sm btn-primary d-block" data-toggle="modal" data-target="#modalBayar" style="width: 100%">
                    bayar
                  </button>
                </div>
                <div class="col">
                <a href="https://api.whatsapp.com/send?phone=6289608717627&text=Saya%20ingin%20konfirmasi%20pembayaran%20atas%20nama%20:%20{{ $transactions[0]->name }},%20email%20:%20{{ $transactions[0]->email }}" class="btn btn-sm btn-success d-block">
                    konfirmasi
                  </a>
                </div>
              </div>
          </div>
      </div>
      </div>  
    </div>
  </div>
</div>
</div>
@endif


<!-- Modal -->
<div class="modal fade" id="modalBayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilihan pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-2 align-items-center">
          <img src="{{ url('frontend/assets/img/bca.jpg') }}" width="100">
          <h4 class="text-muted">2910293</h4>
        </div>
        <div class="row d-flex justify-content-between px-2 align-items-center my-3">
          <img src="{{ url('frontend/assets/img/bni.png') }}" width="100">
          <h4 class="text-muted">2910293</h4>
        </div>
        <div class="row d-flex justify-content-between px-2 align-items-center my-3">
          <img src="{{ url('frontend/assets/img/bri.png') }}" width="100">
          <h4 class="text-muted">2910293</h4>
        </div>
        <div class="row d-flex justify-content-between px-2 align-items-center">
          <img src="{{ url('frontend/assets/img/mandiri.png') }}" width="100">
          <h4 class="text-muted">2910293</h4>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
@endsection