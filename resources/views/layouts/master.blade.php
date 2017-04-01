<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('header')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.css">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">E202</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        @yield('content')
    </div>

    <footer class="fotter">
        @yield('footer')
    </footer>

</div>
</body>
</html>