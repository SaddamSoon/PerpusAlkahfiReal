<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Al-Kahfi</title>
   <style>
        
   </style>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body>

    @stack('before-content')
    @yield('content')
    @stack('after-content')
    

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')


</body>
</html>