@extends('main')

@section('title', 'Wellcome')
@section('content')
    <div class="text-center mt-5">
        <h1>Holaaa</h1>
        <h6 class="text-muted">Selamat Berbelanja YGY</h6>
    </div>
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            @foreach ($products as $item)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name }}</h6>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="fw-bold">IDR {{ $item->price }}</p>
                            <form action="/cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                <input type="submit" value="Add to Cart" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
