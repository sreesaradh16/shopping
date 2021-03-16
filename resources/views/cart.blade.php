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


    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</head>

<body>
    <br>

    <form name="cart" method="post">
        <table class="table table-bordered">

            <tr>
                <th class="cart-description item">Image</th>
                <th class="cart-product-name item">Product Name</th>
                <th class="cart-qty item">Quantity</th>
                <th class="cart-sub-total item">Price Per unit</th>
                <th class="cart-sub-total item">Shipping Charge</th>
                <th class="cart-total last-item">Grandtotal</th>
                <th class="cart-romove item">Remove</th>
            </tr>

           
            <tbody>
                @foreach(session('cart')as $id => $details)
                <?php $total += $details['price']*$details['quantity']?>
                <tr> 
                    <td class="cart-image">
                        <img style= "width:70px; height:100px;" src="/storage/profile/{{$details->image1}}">
                    </td>
                    <td>{{$details->name}}</td>
                    <td>
                        <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
						</div>
                    </td>
                    <td>{{$details->price}}</td>
                    <td>{{$details->shippingcharge}}</td>
                    <td>{{$details->price}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                
                @endforeach
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="shopping-cart-btn">
                                <h3 style="color:green">GRAND TOTAL</h3>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="shopping-cart-btn">
                                <a href="index.php" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                            </div>
                        </td>
                        <td>
                            <div class="shopping-cart-btn">
                                <input type="submit" class="btn btn-upper btn-primary outer-left-xs" value="Proceed to Checkout">
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </form>
</body>
</html>
@endsection