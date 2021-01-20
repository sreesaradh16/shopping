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

        <style>
            body {
                font-family: 'Open Sans', Arial, sans-serif;
            }   
            #heading3{
                width:100%;
                height:70px;
                background-color:white;
            }
            .widget-menu {
             
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                overflow: hidden;
            }
            ul {
                display: block;
                list-style-type: disc;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 10px;
                margin-inline-end: 10px;
                padding-inline-start: 10px;
                padding-inline-end: 10px;
                padding-top:10px;
                padding-bottom:10px;
            }
            .widget-menu>li>a {
                background-color: #2d2b32;
                color: white;
            }   
            .widget-menu a {
                color: #555;
                display: block;
                line-height: 20px;
                padding: 15px;
                text-decoration: none!important;
            }
            li{
                list-style:none;
            }


        </style>


</head>
<body>
    <div class="container-fluid">
        <div id="heading3" class="col-md-12">   
            <div class="form-row">
                <div class="col-md-4">
                    <h4 style="margin-top:18px;">Shopping Portal | Admin</h4>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2">
                    <h5 style="margin-top:18px;">Admin</h5>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <div class="side-bar" >
                    <ul class="widget-menu ">
                        <li>
                            <a href="index">Home</a>
                        </li><br>
                        <li>
                            <a href="ordermanagement">Order Management</a>
                        </li>
                        <li>
                            <a href="manageuser">Manage Users</a>
                        </li>
                        <br>
                        <li>
                            <a href="insertproduct">Insert product</a>
                        </li>
                        <li>
                            <a href="manageproduct">Manage Product</a>
                        </li>
                        <br>
                        <li>
                            <a href="changepass">Change Password</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>   
            <div class="col-md-9" style="top:20px;">
                @yield('content')
            </div>
        </div> 
    </div>

</body>
</html>
