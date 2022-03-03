<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dc-comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section id="section1">
        @include('partials.header')
    </section>
    <section id="section2">
        @include('partials.main')
    </section>
    <section id="3">
        @include('partials.footer')
    </section>
</body>
</html>