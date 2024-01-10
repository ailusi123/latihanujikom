<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
            body{
            background-color: rgb(255, 255, 255);
            justify-content: center;
            }
    </style>
</head>
<body class="text-center align-items-center">
    <form action="{{ url('login') }}" method="post" >
        @csrf
        <div class="">
            <div class="container pt-4 mt-4">
                <div class="row justify-content-center align-item-center ">
                    <div class="col-md-4 py-4">
                        <h3 class="text-center fw-bold pt-3">L O G I N</h3>
                        <div class="form-group">
                            <div class="col-mb-2">
                                <label class="form-label fw-bold " for="">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-mb-2">
                                <label class="form-label fw-bold" for="">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pt-3">
                                <input type="submit" value="LOGIN" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-8">
                        <div class="text-center">
                            <img class="w-50 " src="{{ asset('img/money.png')}}" alt="">
                        </div>

                    </div> --}}
                
                        <p class="text text-light">Don't you have an account?<a href="register" class="fw-bold"><br> Sign Up</a></p>
                    
                </div>
            </div>

        </div>
    </form>   
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>