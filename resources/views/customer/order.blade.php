<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Order</title>
  </head>
  <body>
    <div class="container" style="margin-top: 150px">
        <h3 style="text-align: center;  margin-bottom: 20px"> Your Order History</h3>
        <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">status</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($order); $i++)

                    @php
                       $product = DB::table('products')
                        ->where('id', $order[$i]->product_id)
                        ->get(); 
                    @endphp
                    <tr>
                        <th>{{$order[$i]->id}}</th>
                        <td>{{$product[0]->product_name}}</td>
                        <td>{{$order[$i]->quantity}}</td>
                        <td>{{$product[0]->product_price*$order[$i]->quantity}}</td>
                        <td>{{$order[$i]->status}}</td>
                        <td>{{$order[$i]->created_at}}</td>
                    </tr>
                @endfor
              </tbody>
          </table>

          <a href="{{route('order.download', $shopName)}}" style="margin-left: 480px; margin-top: 500px;" ><button type="button" class="btn btn-primary btn-lg mt-5" >Download Pdf</button></a>
          
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>