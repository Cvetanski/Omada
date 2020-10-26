<html>
<head>
    <title>Omada Technology</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
</head>
<body>
@section('sidebar')
@show
<div class="cover-container d-flex h-100 p-3  flex-column">
    <header class="masthead">
        <div class="inner">
            <nav class="nav nav-masthead justify-content-center" style="text-align: center">
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('clients*') ? "active" : ""}}" href="{{route('clients.index')}}">Clients</a>
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('vehicles*') ? "active" : ""}}" href="{{route('vehicles.index')}}">Vehicles</a>
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('employees*') ? "active" : ""}}" href="{{route('employees.index')}}">Employees</a>
                <a class="nav-link {{\Illuminate\Support\Facades\Request::is('sales*') ? "active" : ""}}" href="{{route('sales.index')}}">Sales</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        @yield('content')
    </main>

    <footer class="mastfoot mt-auto">
    </footer>
</div>
</body>
</html>