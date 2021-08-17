@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>category_id</td>
                <td>{{ $product->category_id }}</td>
            </tr>
            <tr>
                <td>brand_id</td>
                <td>{{ $product->brand_id }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->content }}</td>
            </tr>
            <tr>
                <td>Slug</td>
                <td>{{ $product->slug }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{Storage::url($product->image)}}" height="240px"></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td>{{$product->price}}</td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection