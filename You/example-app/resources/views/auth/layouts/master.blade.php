<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Админка: @yield('title')</title>

    <!-- Favicon  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">




    <script src="{{ asset('js/site.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light bg-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                Вернуться на сайт
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                
                    <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0">
                         @admin
                            <li><a href="{{route('categories.index')}}" class="nav-link">Категории</a></li>
                            <li><a href="{{route('products.index')}}"  class="nav-link">Товары</a>
                            <li><a href="{{route('brands.index')}}"  class="nav-link">Бренды</a>

                            <li><a href='' class="nav-link">Свойства</a>
                            <li><a href='' class="nav-link">Купоны</a>
                            <li><a href='' class="nav-link">Поставщики</a>
                            </li>
                            <li><a href="{{route('home')}}"class="nav-link">Заказы</a></li>
                        @endadmin
                    </ul>
               
                @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Зарегистрироваться</a>
                        </li>
                    </ul>
                @endguest

                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            @admin
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                        Администратор
                                </a>
                            @else 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                        Аккаунт 
                                </a>
                            @endadmin
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>