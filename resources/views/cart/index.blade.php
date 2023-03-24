@extends('main');

@section('title', 'Cart')
@section('content')
    <h1 class="text-center">Keranjangmu</h1>
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            @foreach ($carts as $item)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-body">
                            <h3 class="card-title">{{ $item->product->name }}</h3>
                            <h6 class="card-title">{{ $item->product->price }}</h6>
                            <p class="card-title"> Jumlah : {{ $item->quantity }}</p>
                            <a href="/cart/{{ $item->id }}/delete" class="btn btn-md btn-danger mt-3">Hapus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <p class="alert alert-success">Total : {{ $item->total_price }}</p>
                <p class="alert alert-warning">Belom jadi tapi Kak Totalnya</p>
            </div>
        </div>
    </div>
@endsection
