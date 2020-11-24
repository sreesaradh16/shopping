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
    /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 6px;
    top: 0;
    width: 99%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    padding: 0px 20px 30px 20px;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
    position: absolute;
    right: -10px;
    top: -25px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }
  .close1 {
    position: absolute;
    right: -10px;
    top: -35px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close1:hover,
  .close1 :focus,
  .close:focus {
    color: red;
    cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }
    
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
        body {
            background-image: url("images/background.jpg");
            background-repeat: repeat-y;
            background-size: 1500px;
        }
        .form-control{
            height:30px;
        }
        .container{
            margin-top:20px;
        }
        .msg{
            color:red;
            font-size: 18px;
        }

    </style>
    <script type="text/javascript">
        function regval()
        {
            var name_elt = document.getElementById("name");
            var lname_elt = document.getElementById("lname");
            var mobile = document.getElementById("mobile");
            var email = document.getElementById("email");
            var password = document.getElementById("password");
            var cpassword = document.getElementById("cpassword");
            var name_msg = document.getElementById("name_msg");
            var m_msg = document.getElementById("mobile_msg");
            var email_msg = document.getElementById("emai_msg");
            var p_msg = document.getElementById("password_msg");
            var cp_msg = document.getElementById("cpassword_msg");
            form_status = true;

            if(name_elt.value == '')
            {
                name_msg.style.visibility = 'visible';
                name_elt.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                name_elt.style.borderColor = 'black';
                name_msg.style.visibility = 'hidden';
            }
            if(lname_elt.value == '')
            {
                m_msg.style.visibility = 'visible';
                lname_elt.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                lname_elt.style.borderColor = 'black';
                m_msg.style.visibility = 'hidden';
            }
            if(mobile.length < 10)
            {
                mobile.style.borderColor = 'black';
            }
            else
            {
                mobile.style.borderColor = 'red';
                form_status = false;
            }
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
            {
                email_msg.style.visibility = 'hidden';
                email.style.borderColor = 'black';
            }
            else
            {
                email_msg.style.visibility = 'visible';
                email.style.borderColor = 'red';
                form_status = false;
            }
            
            if(password.length < 5)
            {
                password.style.borderColor = 'black';
                p_msg.style.visibility = 'hidden';
            }
            else
            {
                p_msg.style.visibility = 'visible';
                password.style.borderColor = 'red';
                form_status = false;
            }
            if(cpassword == '' || cpassword == password)
            {
                cp_msg.style.visibility = 'hidden';
                cpassword.style.borderColor = 'black';
            }
            else
            {
                cp_msg.style.visibility = 'visible';
                cpassword.style.borderColor = 'red';
                form_status = false;
            }
            if (form_status == false) 
            {
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container"> 
        <form action="" >
            <a class="nav-link" href="index" style="color:red;"><i class="fa fa-home" style="font-size: 2em; position:fixed;"></i></a>
            <center><h3>REGISTRATION FORM</h3><hr></center><br>
            <div class="form-row">
                <div class="col-md-4"></div>
                <div class="col-md-2 col-6 mb-3">
                    <input type="text" class="form-control" id="name" placeholder="First Name">
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <span id="name_msg" class="msg" style="visibility: hidden;" >Enter your name</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 col-12 mb-3">
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
                </div>
                <div class="col-md-3 col-3">
                    <span id="mobile_msg" class="msg" style="visibility: hidden;">Minimum 10 digits requirerd</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-3">
                    <span id="email_msg" class="msg" style="visibility: hidden;">Enter your email</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="col-md-3 mb-3">
                    <span id="password_msg" class="msg" style="visibility: hidden;">Must have 5 letters</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 mb-3">
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password">
                </div>
                <div class="col-md-3 mb-3">
                    <span id="cpassword_msg" class="msg" style="visibility: hidden;">Password does not match</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 mb-3">
                    <input type="submit" class="btn btn-primary " style="width:100%;" value="Register" onclick="return regval()">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3"></div>
                <div class="col-md-4 mb-3">
                    <h6 style="color:white;">already have an account?  <a href="#" style="color:black;" onclick="document.getElementById('id02').style.display='block'"
                            role="button" aria-haspopup="true" aria-expanded="false">Sign-in</a></h6>
                </div>
            </div>
        </form>
        <div id="id02" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close1"
                title="Close Modal">&times;</span>
            </div>

            <div>
                <input type="text" class="form-control"  placeholder="Username" name="uname" required>

                <input type="password" class="form-control"  placeholder="Password" name="psw" required>

                <br><br><button type="submit" id="btn5">Login</button>
                <a href="#" style="float:right;">Forgot password??</a>
            </div>
    
        </form>
    </div>
</body>

</html>