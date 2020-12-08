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



			<div class="row">
				<div class="col-md-4 col-8">
				        <div class="col-md-12">
                            <center><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgproduct" alt="..."></center>
                        </div>
				</div>
				<div class="col-md-6">
				<div class="card-body font1">
                        <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                        <span class="fa fa-star checked"></span>
                    	<span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
					    <h4>Rs 99000</h4>
                        <p>No cost EMI</p>
                        <p>Delivery by <span class="del">Sunday, Nov15</span></p>
                        <p> <span class="del"> Warrenty </span>1 Year for Handset, 6 Months for Accesories</p>
                        <div>
                            <h5>Highlights</h5>
                            <ul>
                            <li>3GB RAM | 32GB ROM | Expandable UPTO 256GB</li>
                            <li>16.5 cm(6.5 inch)HD+ Display</li>
                            <li>12MP + 2MP + 6MP | 8MP Front Camera </li>
                            <li>5000 mAh Lithium-ion Battery</li>
                            <li>Quadcomm Snapdragon 665 Processor</li>
                            </ul>
                        </div>
                        <button id="btn3">ADD TO CART</button>
                        <a href="checkout"><button id="btn4">BUY NOW</button></a>
                        
				</div>
			</div>

    </div>
</body>

</html>