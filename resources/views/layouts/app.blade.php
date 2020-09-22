<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" src="/css/app.css">
    <link rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @yield('content')

    @include('inc.aside')
</body>
</html>
