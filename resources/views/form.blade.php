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
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" value="{{old('name')}}" >
            <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
                </span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" >
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
                </span>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="confirm_password" id="" class="form-control" placeholder="" >
            <span class="text-danger">
                @error('confirm_password')
                    {{$message}}
                @enderror
                </span>
        </div>
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
</form>
</body>
</html>