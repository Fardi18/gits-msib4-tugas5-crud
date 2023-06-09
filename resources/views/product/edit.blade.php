@extends('main');

@section('title', 'Add Product')

@section('content')
    <div class="text-center">
        <h3>Edit Product</h3>
    </div>
    <!-- Create Post Form -->
    <form action="/product/{{ $products->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="product_name" value="{{ $products->name }}">
            <div id="emailHelp" class="form-text">Nama roduk tidak boleh lebih dari 255 karakter</div>
            @error('product_name')
                <div class="invalid-feedback">
                    Nama tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('product_description') is-invalid @enderror"
                id="exampleInputPassword1" name="product_description" value="{{ $products->description }}">
            @error('product_description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror"
                id="exampleInputPassword1" name="product_price" value="{{ $products->price }}">
            @error('product_price')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong
                </div>
            @enderror
        </div>
        <select class="form-select @error('product_price') is-invalid @enderror" aria-label="Default select example"
            name="product_category">
            <option selected>Pilih Category</option>
            @foreach ($categories as $item)
                @if ($products->category_id == $item->id)
                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
            @endforeach
        </select>
        @error('product_category')
            <div class="invalid-feedback">
                Kategori tidak boleh kosong
            </div>
        @enderror
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
