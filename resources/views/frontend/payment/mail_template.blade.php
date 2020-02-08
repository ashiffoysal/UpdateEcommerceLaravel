<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>You are welcome from DurbarIt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="btn btn-success">Successfully paid</h6>
                        </div>
                        <div class="card-body">
                            <h5>Order</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Product Code</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quntity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                       $cartItems = App\OrderStorage::where('purchase_key', $orderPlace->cart_id)->first();
                                    @endphp
                                      @foreach ($cartItems->cart_data as $cart)
                                      @php
                                        $product = App\Product::where('id', $cart->attributes->product_id)->select('product_sku')->first();
                                        // echo $cart->id ."<br>";
                                        // echo $cart->name ."<br>";
                                        // echo $cart->price ."<br>";
                                        // echo $cart->quantity ."<br>";
                                        // echo $cart->attributes->colors ."<br>";
                                        // echo $cart->attributes->size ."<br>";
                                        // echo $product->product_sku;

                                      @endphp
                                    <tr>
                                        <td>{{ $cart->name }}</td>
                                        <td>{{ $product->product_sku }}</td>
                                        <td>{{ $cart->attributes->colors ? $cart->attributes->colors : "N/A" }}</td>
                                        <td>{{ $cart->attributes->size ? $cart->attributes->size : "N/A" }}</td>
                                        <td>{{ $cart->quantity }}</td>
                                        <td>{{ $cart->price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-6">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        Total Quantity:
                                    </td>
                                    <td>
                                        {{ $orderPlace->total_quantity }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Total:
                                    </td>
                                    <td>
                                        {{ $orderPlace->total_price }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Payment Status:
                                    </td>
                                    <td>
                                        PAID
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
