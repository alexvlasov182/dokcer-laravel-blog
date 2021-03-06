<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon"
          href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTIiIHZpZXdCb3g9IjAgMCA1MCA1MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48dGl0bGU+TG9nb21hcms8L3RpdGxlPjxwYXRoIGQ9Ik00OS42MjYgMTEuNTY0YS44MDkuODA5IDAgMCAxIC4wMjguMjA5djEwLjk3MmEuOC44IDAgMCAxLS40MDIuNjk0bC05LjIwOSA1LjMwMlYzOS4yNWMwIC4yODYtLjE1Mi41NS0uNC42OTRMMjAuNDIgNTEuMDFjLS4wNDQuMDI1LS4wOTIuMDQxLS4xNC4wNTgtLjAxOC4wMDYtLjAzNS4wMTctLjA1NC4wMjJhLjgwNS44MDUgMCAwIDEtLjQxIDBjLS4wMjItLjAwNi0uMDQyLS4wMTgtLjA2My0uMDI2LS4wNDQtLjAxNi0uMDktLjAzLS4xMzItLjA1NEwuNDAyIDM5Ljk0NEEuODAxLjgwMSAwIDAgMSAwIDM5LjI1VjYuMzM0YzAtLjA3Mi4wMS0uMTQyLjAyOC0uMjEuMDA2LS4wMjMuMDItLjA0NC4wMjgtLjA2Ny4wMTUtLjA0Mi4wMjktLjA4NS4wNTEtLjEyNC4wMTUtLjAyNi4wMzctLjA0Ny4wNTUtLjA3MS4wMjMtLjAzMi4wNDQtLjA2NS4wNzEtLjA5My4wMjMtLjAyMy4wNTMtLjA0LjA3OS0uMDYuMDI5LS4wMjQuMDU1LS4wNS4wODgtLjA2OWguMDAxbDkuNjEtNS41MzNhLjgwMi44MDIgMCAwIDEgLjggMGw5LjYxIDUuNTMzaC4wMDJjLjAzMi4wMi4wNTkuMDQ1LjA4OC4wNjguMDI2LjAyLjA1NS4wMzguMDc4LjA2LjAyOC4wMjkuMDQ4LjA2Mi4wNzIuMDk0LjAxNy4wMjQuMDQuMDQ1LjA1NC4wNzEuMDIzLjA0LjAzNi4wODIuMDUyLjEyNC4wMDguMDIzLjAyMi4wNDQuMDI4LjA2OGEuODA5LjgwOSAwIDAgMSAuMDI4LjIwOXYyMC41NTlsOC4wMDgtNC42MTF2LTEwLjUxYzAtLjA3LjAxLS4xNDEuMDI4LS4yMDguMDA3LS4wMjQuMDItLjA0NS4wMjgtLjA2OC4wMTYtLjA0Mi4wMy0uMDg1LjA1Mi0uMTI0LjAxNS0uMDI2LjAzNy0uMDQ3LjA1NC0uMDcxLjAyNC0uMDMyLjA0NC0uMDY1LjA3Mi0uMDkzLjAyMy0uMDIzLjA1Mi0uMDQuMDc4LS4wNi4wMy0uMDI0LjA1Ni0uMDUuMDg4LS4wNjloLjAwMWw5LjYxMS01LjUzM2EuODAxLjgwMSAwIDAgMSAuOCAwbDkuNjEgNS41MzNjLjAzNC4wMi4wNi4wNDUuMDkuMDY4LjAyNS4wMi4wNTQuMDM4LjA3Ny4wNi4wMjguMDI5LjA0OC4wNjIuMDcyLjA5NC4wMTguMDI0LjA0LjA0NS4wNTQuMDcxLjAyMy4wMzkuMDM2LjA4Mi4wNTIuMTI0LjAwOS4wMjMuMDIyLjA0NC4wMjguMDY4em0tMS41NzQgMTAuNzE4di05LjEyNGwtMy4zNjMgMS45MzYtNC42NDYgMi42NzV2OS4xMjRsOC4wMS00LjYxMXptLTkuNjEgMTYuNTA1di05LjEzbC00LjU3IDIuNjEtMTMuMDUgNy40NDh2OS4yMTZsMTcuNjItMTAuMTQ0ek0xLjYwMiA3LjcxOXYzMS4wNjhMMTkuMjIgNDguOTN2LTkuMjE0bC05LjIwNC01LjIwOS0uMDAzLS4wMDItLjAwNC0uMDAyYy0uMDMxLS4wMTgtLjA1Ny0uMDQ0LS4wODYtLjA2Ni0uMDI1LS4wMi0uMDU0LS4wMzYtLjA3Ni0uMDU4bC0uMDAyLS4wMDNjLS4wMjYtLjAyNS0uMDQ0LS4wNTYtLjA2Ni0uMDg0LS4wMi0uMDI3LS4wNDQtLjA1LS4wNi0uMDc4bC0uMDAxLS4wMDNjLS4wMTgtLjAzLS4wMjktLjA2Ni0uMDQyLS4xLS4wMTMtLjAzLS4wMy0uMDU4LS4wMzgtLjA5di0uMDAxYy0uMDEtLjAzOC0uMDEyLS4wNzgtLjAxNi0uMTE3LS4wMDQtLjAzLS4wMTItLjA2LS4wMTItLjA5di0uMDAyLTIxLjQ4MUw0Ljk2NSA5LjY1NCAxLjYwMiA3Ljcyem04LjgxLTUuOTk0TDIuNDA1IDYuMzM0bDguMDA1IDQuNjA5IDguMDA2LTQuNjEtOC4wMDYtNC42MDh6bTQuMTY0IDI4Ljc2NGw0LjY0NS0yLjY3NFY3LjcxOWwtMy4zNjMgMS45MzYtNC42NDYgMi42NzV2MjAuMDk2bDMuMzY0LTEuOTM3ek0zOS4yNDMgNy4xNjRsLTguMDA2IDQuNjA5IDguMDA2IDQuNjA5IDguMDA1LTQuNjEtOC4wMDUtNC42MDh6bS0uODAxIDEwLjYwNWwtNC42NDYtMi42NzUtMy4zNjMtMS45MzZ2OS4xMjRsNC42NDUgMi42NzQgMy4zNjQgMS45Mzd2LTkuMTI0ek0yMC4wMiAzOC4zM2wxMS43NDMtNi43MDQgNS44Ny0zLjM1LTgtNC42MDYtOS4yMTEgNS4zMDMtOC4zOTUgNC44MzMgNy45OTMgNC41MjR6IiBmaWxsPSIjRkYyRDIwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="col-6 navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">?????????????? ???????????????? <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active offset-3">
                <a class="nav-link" href="{{route('post.create')}}">?????????????? ???????? <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{route('post.index')}}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="?????????? ????????..."
                   aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">??????????</button>
        </form>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>