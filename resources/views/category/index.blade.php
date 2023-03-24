@extends('main');

@section('title', 'List Category')

@section('content')
    <div class="text-center">
        <h3>List Category</h3>
    </div>
    <a href="{{ '/category/add' }}" class="btn btn-primary my-4" type="button">+ Tambah Category</a>
    @foreach ($categories as $item)
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <a href="/category/{{ $item->id }}/edit" class="btn btn-md btn-warning">Ubah</a>
                <a href="/category/{{ $item->id }}/delete" class="btn btn-md btn-danger">Hapus</a>
            </div>
        </div>
    @endforeach
@endsection
