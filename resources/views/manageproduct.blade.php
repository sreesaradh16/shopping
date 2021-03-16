@extends('admin')
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
        body {
            font-family: 'Open Sans', Arial, sans-serif;
        }

        #heading3 {
            width: 100%;
            height: 70px;
            background-color: white;
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
            padding-top: 10px;
            padding-bottom: 10px;
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
            text-decoration: none !important;
        }

        li {
            list-style: none;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="form-row">
                <div class="col-md-12">
                    <h3>Manage Products</h3>
                    <div class="control-group">
                        <div class="controls">
                            <select name="category" class="span8 tip" onChange="getSubcat(this.value);" >
                                <option value="allcategory">All Category</option>
                                <option value="mobile">Mobile</option>
                                <option value="laptop">Laptop</option>
                                <option value="tv">TV</option>
                                <option value="accesories">Accesories</option>
                            </select>
                        </div>
                     </div><br>
                    <div class="module-body table">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                            <tr>
                                <th>Product Name</th>
                                <th>Category </th>
                                <th>Company Name</th>
                                <th>Product Price</th>
                                <th>Product Shipping charge</th>
                                <th>Product Availability</th>
                                <th>image-1</th>
                                <th>image-2</th>
                                <th>image-3</th>
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                            @foreach($data as $Data1)
                            <tr>
                                <td>{{$Data1->name}}</td>
                                <td>{{$Data1->category}}</td>
                                <td>{{$Data1->company}}</td>
                                <td>{{$Data1->price}}</td>
                                <td>{{$Data1->shippingcharge}}</td>
                                <td>{{$Data1->availability}}</td>
                                <td><img style="height:90px; width:50px;" src="/storage/profile/{{$Data1->image1}}"></td>
                                <td><img style="height:90px; width:50px;" src="/storage/profile/{{$Data1->image2}}"></td>
                                <td><img style="height:90px; width:50px;" src="/storage/profile/{{$Data1->image3}}"></td>
                                <td><a  href="{{url('updateproduct1/{id}'.$Data1->id)}}">update</a></td>
                                <td><a onclick="return confirm('are you sure')" href="{{url('deleteproduct/'.$Data1->id)}}">delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

    </body>
</html>
@endsection