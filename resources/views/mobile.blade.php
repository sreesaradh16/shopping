<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">

    <style>
        
    </style>

</head>

<body>
    <div class="container-fluid">

        <!-- nav bar -->

        <header class="top-fixed header">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <h3 style="padding-right:130px; color: white;">Shop-Cart</h3>
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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index" style="font-size:20px"><i
                                    class="fa fa-fw fa-home"></i>Home</a>
                        </li>

                        <li class="nav-item active dropdown">
                            @if(session()->has('user_id'))
                            <a class="nav-link dropdown-toggle" href="logout" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" name="login"
                                style="padding-right:20px; font-size:20px;"><i class="fa fa-fw fa-user"></i>
                                <p>{{session('user_id')}}</p>
                            </a>

                            <ul class="dropdown-menu" id="navbarDropdown" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout">Logout</a></li>
                            </ul>
                            @else
                            <a class="nav-link" href="login" name="login" style="padding-right:20px; font-size:20px;"><i
                                    class="fa fa-fw fa-user"></i>
                                <p>Login</p>
                            </a>
                            @endif
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="cart" style="font-size:20px"><i class="fa"></i> Cart</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div class="div top"></div>

        <div class="row">
            @foreach($data as $Data1)
            <div class="col-md-3" style="padding:10px">
                <div class="card">
                    <div class="form-row">
                        <div class="col-md-4">
                            <a href="productdetails/{{$Data1->id}}"><img src="/storage/profile/{{$Data1->image1}}" class="card-img-top"
                            alt="..."></a>
                        </div>
                        <div class="col-md-7">
                            <h4 class="card-title">{{$Data1->name}}</h4>
                            <h5 class="card-title">{{$Data1->company}}</h5>
                            <h6>{{$Data1->price}}</h6>
                            <p>Delivery by <span class="del">Sunday, Nov15</span></p>
                            <p>Shipping Charge{{$Data1->shippingcharge}}</p>
                            <p>{{$Data1->description}}</p>
                            <h5 style="color:green">{{$Data1->availability}}</h5>
                            <a href="checkout/{{$Data1->id}}"><button  class="btn btn-primary">Buynow</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>