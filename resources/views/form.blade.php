<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <form action="{{url('/')}}/register" method="POST">
        @csrf
        @php
            $demo = 5;
        @endphp
    <div class="container">
        {{-- <h1 class="text-center">Registration</h1> --}}
        <x-input type="text" name="name" label="Please Enter your Name" :demo="$demo"   />
        <x-input type="email" name="email" label="Please Enter your Email"   />
        <x-input type="password" name="password" label="Please Enter your Password"   />
        <x-input type="password" name="confirm_password" label="Confirm Your Password"   />
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
</form>
</body>
</html>