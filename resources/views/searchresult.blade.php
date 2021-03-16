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

    <style>
        
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @foreach($data as $Data1)
            <div class="col-md-3" style="padding:10px">
                <div class="card" style="padding:10px">
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
                            <a href="{{url('add-to-cart/'.$Data1->id)}}"><button  class="btn btn-primary">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
@endsection