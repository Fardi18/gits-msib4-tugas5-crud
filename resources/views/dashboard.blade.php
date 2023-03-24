@extends('main');

@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center my-5">
                <h1>Dashboard</h1>
                <h6 class="text-muted">Atur Product dan Categorymu</h6>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dashboard</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Atur Product atau Category</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque ut
                        accusantium
                        cumque
                        dolorem exercitationem repudiandae veniam reprehenderit corrupti! Perspiciatis, facere?</p>
                    <a href="{{ '/product' }}" class="btn btn-md btn-outline-primary">Product</a>
                    <a href="{{ '/category' }}" class="btn btn-md btn-outline-primary">Category</a>
                </div>
            </div>
        </div>
    </div>
@endsection
