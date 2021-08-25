@extends('auth.layouts.master')
@section ('title' , 'Заказы')
@section('content')
    <div class="col-md-12">
        <h1>Бренды</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->slug}}</td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('brands.destroy', $brand) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('brands.show', $brand) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('brands.edit', $brand) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" type="button"
           href="{{route('brands.create')}}">Добавить категорию</a>
    </div>
@endsection