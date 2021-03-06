<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Posty " . env("APP_ENV"))</title>

    <link rel="icon"
          type="image/png"
          href="/favicon.png">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">

</head>
<body class="bg-gray-300">
<nav class="p-6 bg-white flex justify-between mb-5">
    <ul class="flex items-center">
        <li><a href="" class="p-3">Home</a></li>
        <li><a href="" class="p-3">Dashboard</a></li>
        <li><a href="" class="p-3">Post</a></li>
    </ul>
    <ul class="flex items-center">
        <li><a href="" class="p-3">Name</a></li>
        <li><a href="" class="p-3">Login</a></li>
        <li><a href="" class="p-3">Register</a></li>
        <li><a href="" class="p-3">Logout</a></li>
    </ul>
</nav>
@yield("content", "Nothing")


<script src="{{asset("js/app.js")}}"></script>
</body>

</html>
