{{--@extends('layout.master')--}}
{{--@section('content')--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        /*.form-control{*/
        /*    width: 100%;*/
        /*}*/
        /*.input-group{*/
        /*    width:100%;*/
        /*}*/
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;
            z-index: 2;
        }

        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }

        .btn-facebook {
            background-color: #405D9D;
            color: #fff;
        }

        .btn-twitter {
            background-color: #42AEEC;
            color: #fff;
        }
    </style>
    @include('lib');
</head>
<body>


<div class="container">

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <form action="postRegister" method="post">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="" class="form-control" placeholder="username" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="" class="form-control" placeholder="Email address" type="email">
                </div>
                <!-- form-group// -->
                {{--                <div class="form-group input-group">--}}
                {{--                    <div class="input-group-prepend">--}}
                {{--                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>--}}
                {{--                    </div>--}}
                {{--                    <select class="custom-select" style="max-width: 120px;">--}}
                {{--                        <option selected="">+971</option>--}}
                {{--                        <option value="1">+972</option>--}}
                {{--                        <option value="2">+198</option>--}}
                {{--                        <option value="3">+701</option>--}}
                {{--                    </select>--}}
                {{--                    <input name="" class="form-control" placeholder="Phone number" type="text">--}}
                {{--                </div>--}}
                <!-- form-group// -->
                {{--                <div class="form-group input-group">--}}
                {{--                    <div class="input-group-prepend">--}}
                {{--                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>--}}
                {{--                    </div>--}}
                {{--                    <select class="form-control">--}}
                {{--                        <option selected=""> Select job type</option>--}}
                {{--                        <option>Designer</option>--}}
                {{--                        <option>Manager</option>--}}
                {{--                        <option>Accaunting</option>--}}
                {{--                    </select>--}}
                {{--                </div> <!-- form-group end.// -->--}}
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit"> Create
                        Account
                    </button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="login">Log In</a></p>
            </form>
        </article>
    </div> <!-- card.// -->

</div>
</body>
</html>

{{--@endsection--}}
