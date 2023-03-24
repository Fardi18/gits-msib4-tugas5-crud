@extends('main');

@section('title', 'List Product')

@section('content')
    <div class="text-center">
        <h3>List Product</h3>
    </div>
    <a href="{{ '/product/add' }}" class="btn btn-primary my-4" type="butoon">+ Tambah Produk</a>
    @foreach ($products as $item)
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name }}</h6>
                <p class="card-text">{{ $item->description }}</p>
                <h6>IDR {{ $item->price }}</h6>
                <a href="/product/{{ $item->id }}/edit" class="btn btn-md btn-warning">Ubah</a>
                <a href="/product/{{ $item->id }}/delete" class="btn btn-md btn-danger">Hapus</a>
            </div>
        </div>
    @endforeach
@endsection
