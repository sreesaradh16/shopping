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
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        }

        * {
        box-sizing: border-box;
        }

        .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
        }

        .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        }

        .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
        }

        .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
        padding: 0 16px;
        }

        .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
        }

        input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        label {
        margin-bottom: 10px;
        display: block;
        }

        .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
        }

        .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        }

        .btn:hover {
        background-color: #45a049;
        }

        a {
        color: #2196F3;
        }

        hr {
        border: 1px solid lightgrey;
        }

        span.price {
        float: right;
        color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
        }
    </style>   

</head>
<body>
    <div class="container">
    <h2>Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{url('checkout')}}" method="post">
      {{csrf_field()}}
        <div class="row">
          <div class="col-md-12">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i>Name</label>
            <input type="text" id="name" name="name" placeholder="Example" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="eg@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="kozhikode" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Kerala" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="673521" required>
              </div>
            </div>
          </div>

          
        </div>
        <a href=""></a><input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  @foreach($data as $Data1)
  <div class="col-25">
    <div class="container">
      <h5 class="card-title"><span class="del">{{$Data1->company}}</span></h5>
      <h4 class="card-title">{{$Data1->name}}</h4>
      <p>Delivery by <span class="del">Sunday, Nov15</span></p>
      <p>Shipping Charge <span class="del">{{$Data1->shippingcharge}}</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>{{$Data1->price}}</b></span></p>
    </div>
  </div>
  @endforeach
</div>

    </div>
</body>
</html>