<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate</title>
    @vite([
            'resources/js/app.js',
            'resources/scss/style.scss'
            ])

</head>
<body>
    @include('partials.navbar')
    <button class="fixedbutton">
        <a href="#">Email Us</a> 
    </button>
    @yield('content')
    @include('partials.footer')
</body>
</html>