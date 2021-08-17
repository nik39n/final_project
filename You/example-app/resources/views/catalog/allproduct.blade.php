@extends('layout.site')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($allproduct->products as $product)
                @include('catalog.part.product')
            @endforeach
        </div>  
    </div>

@endsection