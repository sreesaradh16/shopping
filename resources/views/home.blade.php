<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>



    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">

</head>

<body>
    <div class="container-fluid">

        <!-- nav bar -->

        <header class="top-fixed header">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <h3 style="padding-right:130px; color: white;">Shoppify</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 form-inline md-form mr-auto mb-4">
                        <input class="form-control mr-sm-2" style="width:450px " type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                            style="color: white;">Search</button>
                    </form>

                    <ul class="navbar-nav nav11">
                        <li class="nav-item navbar1">
                            <a class="nav-link" style="font-size:20px; color:white;" href="index" style="font-size:20px"><i
                                    class="fa fa-fw fa-home"></i>Home</a>
                        </li>

                        <li class="nav-item navbar1 ">
                            @if(session()->has('user_id'))
                            <div class="dropdown">
                                <button type="button" style="font-size:20px; color:white;" class="btn  dropdown-toggle"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-user"></i>{{session('user_id')}}
                                </button>

                                <div class="dropdown-menu " >
                                    <div><a class="dropdown-item" href="#">Profile</a></div>
                                    <div><a class="dropdown-item" href="#">change password</a></div>
                                    <div><a class="dropdown-item" href="logout">Logout</a></div>
                                </div>
                                @else
                                <a class="nav-link" href="login" name="login"
                                    style="font-size:20px;"><i class="fa fa-fw fa-user"></i>Login
                                </a>
                            </div>
                            @endif
                        </li>
                        
                        <li class="nav-item navbar1">
                            @if(session()->has('user_id'))
                            <div class="dropdown">
                                <button type="button" style="font-size:20px; color:white;" class="btn  dropdown-toggle"
                                    data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart"></i>Cart{{session('cart')}}
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                class="badge badge-pill badge-danger">{{ count((array) session('cart'))}}</span>
                                        </div>
                                        <?php $total = 0 ?>
                                        @foreach((array) session('cart') as $id => $details)
                                        <?php $total += $details['price'] * $details['quantity'] ?>
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                        </div>
                                    </div>
                                    @if(session('cart'))->has('user_id'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{ $details['photo'] }}" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p>{{ $details['name'] }}</p>
                                            <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                                class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <a class="nav-link" href="login" name="cart"
                                    style="font-size:20px;"> <i class="fa fa-shopping-cart"></i>Cart
                                    </a>
                            </div>
                            @endif
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div class="div top"></div>

    </div>
    <div class="form-row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>


</body>

</html>