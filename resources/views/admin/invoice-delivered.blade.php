<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Invoicebus Invoice Template">
     <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="91216e926eab41d8aa403bf4b00f4e19">

    <link rel="stylesheet" href="/invoice/template.css">
    {{-- <link rel="stylesheet" href="{{ ltrim(elixir('invoice/template.css'), '/') }}" /> --}}
  </head>
  <body>
      <h1 style="text-align: center; color:green">INVOICE</h1>
    <div id="container">
      <div class="left-stripes">
        <div class="circle c-upper"></div>
        <div class="circle c-lower"></div>
      </div>

      <br>
      <div class="right-invoice">
        <section id="memo">
          <div class="company-info">
            <h4>{{ $admin->shop_name }} Shop</h4>
            <br>
            <span>{{ $admin->address }}</span>
            <br>
            <span>{{ $admin->phone  }}</span>
            <br>
            <span>{{ $admin->email }}</span>
          </div>
          <hr>
          <div class="logo">
            {{-- <img src="{{ url('/public/upload') }}/{{ $admin->shop_logo }}" alt=""> --}}
            {{-- <p>{{ url('/public/upload/') }}/{{ $admin->shop_logo }}</p> --}}
          </div>
        </section>

        <section id="invoice-title-number">

          <div class="title-top">
            {{-- <span class="x-hidden">issue_date_label</span> --}}
            <span>Date: {{ $order[0]->updated_at }}</span> <span id="number">Invoice: ##0{{ $order[0]->id }}</span>
          </div>


        </section>
<hr>
        <section id="client-info">
          <span>CLIENT</span>
          <div class="client-name">
            <span>{{ $order[0]->name }}</span>
          </div>

          <div>
            <span>{{ $order[0]->address  }}</span>
          </div>

          <div>
            <span>+880{{ $order[0]->phone }}</span>
          </div>

          <div>
            <span>{{ $order[0]->email }}</span>
          </div>
        </section>

        <div class="clearfix"></div>
        <div class="clearfix"></div>
<hr>
        <div class="currency">
          <span>* All prices are in </span> <span>BDT</span>
        </div>

        <section id="items">

          <table cellpadding="0" cellspacing="0">

            <tr>
              <th></th> <!-- Dummy cell for the row number and row commands -->
              <th>ITEM</th>
              <th>QUANTITY</th>
              <th>PRICE</th>
              <th>DISCOUNT</th>
              <th>DELIVERY CHARGE</th>
              <th>LINETOTAL</th>
            </tr>

            <tr data-iterate="item">
              <td>1</td> <!-- Don't remove this column as it's needed for the row commands -->
              <td>{{ $order[0]->product_name }} {{ $order[0]->product_description }}</td>
              <td>{{ $order[0]->quantity }}</td>
              <td>{{ $order[0]->product_price }} BDT</td>
              <td>{{ $order[0]->product_discount }} BDT</td>
              <td>{{ $order[0]->shipping_cost }} BDT</td>
              <td>{{ ($order[0]->shipping_cost+$order[0]->product_price)-$order[0]->product_discount}} BDT</td>
            </tr>
          </table>
<hr>
        </section>

        <section id="sums">

          <table cellpadding="0" cellspacing="0">
            <tr>
              <th>Subtotal---</th>
              <th></th>
              <td>{{ ($order[0]->shipping_cost+$order[0]->product_price)-$order[0]->product_discount}} BDT</td>
            </tr>
            <tr data-hide-on-quote="true">
              <th>Paid</th>
              <th></th>
              <td>{{ ($order[0]->shipping_cost+$order[0]->product_price)-$order[0]->product_discount}} BDT</td>
            </tr>

            <tr data-hide-on-quote="true" class="due-amount">
              <th>Due sum</th>
              <th></th>
              <td>0 BDT</td>
            </tr>

          </table>

        </section>
      </div>
    </div>

    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script>
  </body>
</html>
