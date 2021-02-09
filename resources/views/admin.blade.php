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
            #head5{
                width:100%;
                height:60px;
                background-color:white;
            }
            .widget-menu {
             
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                overflow: hidden;
                position:fixed;
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
            .sidenav 
            {
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                overflow-x: hidden;
            }
        </style>


</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">   
            <div class="form-row sidenav" id="head5">
                <div class="col-md-4">
                    <h4 style="margin-top:18px; padding:0 10px">Shopping Portal | Admin</h4>
                </div>
                <div class="col-md-8"></div>
            </div>
        </div><br><br><br>
        
            <div class="form-row">
                <div class="col-md-2">
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
                            <li>
                                <a href="offer">Offers</a>
                            </li>
                            <br>
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
