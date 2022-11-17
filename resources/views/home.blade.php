<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1>
        Welcome, {{$name ?? 'Guest'}}
        {!! $demo !!}
    </h1>
    @unless($name == 'Divyanshu')
        This name is not Divyanshu
    @endunless
</body>
</html>