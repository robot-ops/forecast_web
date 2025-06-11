<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for the application">
    <meta name="author" content="Redesma Technologies">
    <meta name="keywords" content="login, authentication, user access">

    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('template/dist') }}/assets/compiled/css/login.css" />

    <link rel="stylesheet" crossorigin href="{{ asset('template/dist') }}/assets/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="{{ asset('template/dist') }}/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" crossorigin href="{{ asset('template/dist') }}/assets/compiled/css/iconly.css">

</head>

<body>
    <div class="center">
        @yield('content')
    </div>

    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</body>

</html>
