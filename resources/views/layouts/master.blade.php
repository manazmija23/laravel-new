<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    @yield('styles')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href={{asset('css/style.css')}}>

</head>
<body>

        @if(Auth::guard('admin')->check())

            <header class="admin-header">
                <img class="logo" src="images/logo.png" alt="">
                <nav class="admin-dashboard">
                    <a class="{{ Request::url() == url('/admin') ? 'active-nav-admin' : '' }}" href={{asset('admin')}}>Posts</a>
                    <a class="{{ Request::url() == url('/products-dash') ? 'active-nav-admin' : '' }}" href={{asset('products-dash')}}>Products</a>
                    <a class="{{ Request::url() == url('/admin/comments') ? 'active-nav-admin' : '' }}" href={{asset('admin/comments')}}>Post Comments</a>
                    <a class="{{ Request::url() == url('/products-comments') ? 'active-nav-admin' : '' }}" href={{asset('products-comments')}}>Product Comments</a>
                    <a class="{{ Request::url() == url('/messages') ? 'active-nav-admin' : '' }}" href={{asset('messages')}}>Messages</a>
                    <a class="{{ Request::url() == url('/tags') ? 'active-nav-admin' : '' }}" href={{asset('tags')}}>Tags</a>
                </nav>

                <div class="dropdown login-name">
                    <button class="dropdown-toggle btn btn-default"  data-toggle="dropdown">{{ Auth::guard('admin')->user()->name }}
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>

                    </ul>
                </div>
            </header>

            @else
            <header>
                <nav class="navmenu">
                    <a class="{{ Request::url() == url('/') ? 'active-nav' : '' }}" href={{asset('/')}}>News</a>
                    <a class="{{ Request::url() == url('/football') ? 'active-nav' : '' }}" href={{asset('/tags/3')}}>Football</a>
                    <a class="{{ Request::url() == url('/blog') ? 'active-nav' : '' }}" href={{asset('/tags/1')}}>Basketball</a>
                    <a class="{{ Request::url() == url('/products') ? 'active-nav' : '' }}" href={{asset('/tags/2')}}>Tennis</a>

                </nav>
            </header>

        @endif

    @yield('header')
    @yield('content')

    <footer>
        <div class="social">

            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>

        <div class="copyright text-center">
            <h4 style="color: dimgrey">Copyright 2018</h4>
        </div>

    </footer>


    @yield('scripts')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>
