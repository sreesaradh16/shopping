<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">
</head>

<body>
    <div class="container-fluid">

                      <!-- nav bar -->

        <header  class="top-fixed header">
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
                            <a class="nav-link" href="index"><i class="fa fa-fw fa-home"></i>Home</a>
                        </li>
                        <a class="nav-link" href="login" style="padding-right:20px;" onclick="document.getElementById('id01').style.display='block'"
                            role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>
                            Login
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i style="font-size:24px" class="fa">&#xf07a;</i> Cart</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div class="div top"></div>



        <!-- menu -->

        <div class="row" id="menu1">   
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Mobile</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Laptop</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Tv</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Accesories</a></center>
                    </div>
            </div><br>




        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 boxpad2">
                            <center><a href="productdetails"><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgphnbox" alt="..."></a></center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body font1">
                                <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <ul>
                                    <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                    <li>16.9 cm(6.53) Full HD+ Display</li>
                                    <li>13MP+8MP+5MP+2MP | 8MP Front Camera</li>
                                    <li>5000 mAh Lithium Polymer Battery</li>
                                    <li>MediaTek Helio G80 Processor</li>
                                    <li>1 Year for Handset, 6 Months for Accesories</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-top:50px;">
                            <h4>Rs 99000</h4>
                            <p>No cost EMI</p><br><br>
                            <a href="cart"><button class="btn6">Add to Cart</button></a>
                            <a href="checkout"><button class="btn7">Buy Now</button></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 boxpad2">
                            <center><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgphnbox" alt="..."></center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body font1">
                                <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <ul>
                                    <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                    <li>16.9 cm(6.53) Full HD+ Display</li>
                                    <li>13MP+8MP+5MP+2MP | 8MP Front Camera</li>
                                    <li>5000 mAh Lithium Polymer Battery</li>
                                    <li>MediaTek Helio G80 Processor</li>
                                    <li>1 Year for Handset, 6 Months for Accesories</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-top:50px;">
                            <h4>Rs 99000</h4>
                            <p>No cost EMI</p><br><br>
                            <a href="cart"><button class="btn6">Add to Cart</button></a>
                            <a href="checkout"><button class="btn7">Buy Now</button></a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 boxpad2">
                            <center><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgphnbox" alt="..."></center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body font1">
                                <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <ul>
                                    <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                    <li>16.9 cm(6.53) Full HD+ Display</li>
                                    <li>13MP+8MP+5MP+2MP | 8MP Front Camera</li>
                                    <li>5000 mAh Lithium Polymer Battery</li>
                                    <li>MediaTek Helio G80 Processor</li>
                                    <li>1 Year for Handset, 6 Months for Accesories</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-top:50px;">
                            <h4>Rs 99000</h4>
                            <p>No cost EMI</p><br><br>
                            <a href="cart"><button class="btn6">Add to Cart</button></a>
                            <a href="checkout"><button class="btn7">Buy Now</button></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 boxpad2">
                            <center><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgphnbox" alt="..."></center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body font1">
                                <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <ul>
                                    <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                    <li>16.9 cm(6.53) Full HD+ Display</li>
                                    <li>13MP+8MP+5MP+2MP | 8MP Front Camera</li>
                                    <li>5000 mAh Lithium Polymer Battery</li>
                                    <li>MediaTek Helio G80 Processor</li>
                                    <li>1 Year for Handset, 6 Months for Accesories</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-top:50px;">
                            <h4>Rs 99000</h4>
                            <p>No cost EMI</p><br><br>
                            <a href="cart"><button class="btn6">Add to Cart</button></a>
                            <a href="checkout"><button class="btn7">Buy Now</button></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 boxpad2">
                            <center><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgphnbox" alt="..."></center>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body font1">
                                <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <ul>
                                    <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                    <li>16.9 cm(6.53) Full HD+ Display</li>
                                    <li>13MP+8MP+5MP+2MP | 8MP Front Camera</li>
                                    <li>5000 mAh Lithium Polymer Battery</li>
                                    <li>MediaTek Helio G80 Processor</li>
                                    <li>1 Year for Handset, 6 Months for Accesories</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-top:50px;">
                            <h4>Rs 99000</h4>
                            <p>No cost EMI</p><br><br>
                            <a href="cart"><button class="btn6">Add to Cart</button></a>
                            <a href="checkout"><button class="btn7">Buy Now</button></a>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</body>

</html>