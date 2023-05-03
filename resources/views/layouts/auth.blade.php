<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>N2CMS</title>
    <!-- Bootstrap -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'assets/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="login">
@yield('content')
</body>
</html>
