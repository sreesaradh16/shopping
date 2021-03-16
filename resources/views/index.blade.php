@extends('home')
@section('content')
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

</head>

<body>

<!-- menu -->

<div class="row" id="menu1">
            <div class="col-md-3 col-6">
                <center><a class="nav-l" href="mobile">Mobile</a></center>
            </div>
            <div class="col-md-3 col-6">
                <center><a class="nav-l" href="laptop">Laptop</a></center>
            </div>
            <div class="col-md-3 col-6">
                <center><a class="nav-l" href="tv">Tv</a></center>
            </div>
            <div class="col-md-3 col-6">
                <center><a class="nav-l" href="accesories">Accesories</a></center>
            </div>
        </div>
    <br>
        <!-- new items -->

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img src="{{asset('images/picture1.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="{{asset('images/picture2.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="{{asset('images/picture3.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <br>


        <!-- offer zone -->

        <section>
            <div class="row">
                <div class="col-md-4 col-12 boxpad">
                    <div class="box2 bgcolor">
                        <center>
                            <h4>MONEY BACK</h4>
                        </center>
                        <center>
                            <p>30 DAY MONEY BACK GUARANTEE</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-6 boxpad">
                    <div class="box2 bgcolor">
                        <center>
                            <h4>SPECIAL SALE</h4>
                        </center>
                        <center>
                            <P>ALL ITEMS UP TO 20% OFF</P>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-6 boxpad">
                    <div class="box2 bgcolor">
                        <center>
                            <h4>FREE SHIPPING</h4>
                        </center>
                        <center>
                            <p>FREE SHIP-ON ORDER OVER RS:600</p>
                        </center>
                    </div>
                </div>
            </div>

        </section><br>


        <!-- mobile slide -->

        <section class="d-none d-md-block bgcolor">

            <h3>Featured</h3>
            <hr>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <div class="row ">
                            @foreach($data8 as $Data8)
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="productdetails/{{$Data8->id}}"><img src="/storage/profile/{{$Data8->image1}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <a href="productdetails/{{$Data8->id}}"><h5>{{$Data8->name}}</h5></a>
                                        <h6  class="card-text"><span>&#8377;</span>{{$Data8->price}}</h6>
                                    </div>
                                </center>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            @foreach($data9 as $Data9)
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="productdetails/{{$Data9->id}}"><img src="/storage/profile/{{$Data9->image1}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>   
                                    <div>
                                        <a href="productdetails/{{$Data9->id}}"><h5>{{$Data9->name}}</h5></a>
                                        <h6  class="card-text">{{$Data9->price}}</h6>
                                    </div>
                                </center>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section><br>

        </section><br>

        <!-- Laptop -->
        <section class="bgcolor">
            <a href="laptop">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                @foreach($data10 as $Data10)
                <div class="card">
                    <center><a href="productdetails/{{$Data10->id}}"><img src="/storage/profile/{{$Data10->image1}}"
                                style="max-width:200px; max-height:150px;" alt=""></a></center>
                    <center>
                        <center>
                            <div class="card-body">
                                <h5 class="card-title"><a href="productdetails/{{$Data10->id}}">{{$Data10->name}}</a></h5>
                                <h6  class="card-text"><span>&#8377;</span>{{$Data10->price}}</h6>
                            </div>
                        </center>
                </div>
                @endforeach
            </div>
        </section><br>




        <!-- accesories -->
        <section class="bgcolor">
            <a href="accesories">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
            @foreach($data4 as $Data4)
                <div class="card">
                    <center><a href="productdetails/{{$Data4->id}}"><img src="/storage/profile/{{$Data4->image1}}"
                            class="card-img-top imghead boxpad" alt="..."></a></center>
                    <center>
                        <div class="card-body">
                            <h5 class="card-title"><a href="productdetails/{{$Data8->id}}">{{$Data4->name}}</a></h5>
                            <h6 class="card-text"><span>&#8377;</span>{{$Data4->price}}</h6>
                        </div>
                    </center>
                </div>
            @endforeach
            </div>
        </section><br>



        <!-- laptop  -->
        <section class="bgcolor">
            <a href="tv">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                @foreach($data5 as $Data5)
                <div class="card">
                    <center><a href="productdetails/{{$Data5->id}}"><img style="max-width:200px; max-height:150px;" src="/storage/profile/{{$Data5->image1}}"></a></center>
                    <center>
                        <div class="card-body">
                            <h5 class="card-title"><a href="productdetails/{{$Data5->id}}">{{$Data5->name}}</a></h5>
                            <h6 class="card-text"><span>&#8377;</span>{{$Data5->price}}</h6>
                        </div>
                    </center>
                </div>
                @endforeach        
            </div>
        </section><br>

        <!-- Tv box -->
        <section>
            <div class="card-group bgcolor">
            @foreach($data6 as $Data6)
                <div class="col-md-4 col-12 boxpad">
                    <center><a href="productdetails/{{$Data6->id}}"><img src="/storage/profile/{{$Data6->image1}}"
                                style="max-width: 300px; max-height:230px;" class="card-img-top" alt="..."></a></center>
                    <center><h5 class="card-title"><a href="productdetails/{{$Data6->id}}">{{$Data6->name}}</a></h5>
                            <h6 class="card-text"><span>&#8377;</span>{{$Data6->price}}</h6></center>
                </div>
            @endforeach
            </div>
        </section><br>

        <!-- Mobile -->
        <section class="bgcolor">
            <a href="mobile">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
            @foreach($data7 as $Data7)
                <div class="card">
                    <center><a href="productdetails/{{$Data7->id}}"><img style="height:90px; width:50px;" class="card-img-top boxpad imgphn1" src="/storage/profile/{{$Data7->image1}}"></a></center>
                    <center>
                        
                        <div class="card-body">
                            <h5 class="card-title"><a href="productdetails/{{$Data7->id}}">{{$Data7->name}}</a></h5>
                            <h6 class="card-text"><span>&#8377;</span>{{$Data7->price}}</h6>
                        </div>
                       
                    </center>
            </div>
            @endforeach
        </section><br>



        <!-- brands -->
        <section>
            <h3>
                <center>Our Brands</center>
            </h3>
            <hr>
            <div class="row bgcolor">
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center ">
                    <a href="#" class="nav-link"><img src="{{asset('images/samsung.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/nokia.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/blackberry.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/panasonic.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/sony.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/lenovo.jpg')}}"></a>
                </div>
            </div>
        </section>


        <!-- footer -->
        <div class="text" style="background-color:#3b5998; padding: 60px 0 30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-4">
                        <center>
                            <h6>ABOUT</h6>
                            <ul class="nav-link nav-menu2">
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">ecart stories</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Help</h6>
                            <ul class="nav-link nav-menu2">
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Cancellation and return</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>POLICY</h6>
                            <ul class="nav-link nav-menu2">
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Return policy</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of use</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy </a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Security</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Connect with us</h6>
                            <div class="social">
                                <ul class="nav-menu2">
                                    <li><a href="#" class="">Twitter</a></li>
                                    <li><a href="#" class="">Facebook</a></li>
                                    <li><a href="#" class="">Instagram</a></li>
                                </ul>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Mail us</h6>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Registered Office Address:</h6>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection