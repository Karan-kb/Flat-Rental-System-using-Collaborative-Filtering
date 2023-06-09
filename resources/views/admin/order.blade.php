<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        
        .title_deg{

            text-align:center;
            font-size:25px;
            font-weight:bold;
            padding-bottom:40px;

        }

        .table_deg{
            border:2px solid white;
            width:100%;
            margin:auto;
            
            text-align:center;
        }

        .th_deg{
            background-color:skyblue;
        }

        .img_size{

            width:200px;
            height:100px;
        }
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0"></a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <h1 class="title_deg">All Rented Flats</h1>

          <table class="table_deg">
            <tr class="th_deg">
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Flat Title</th>
                <th>Rent</th>
                <th>Payment Status</th>
                <th>Image</th>
                <th>Print PDF</th>
                
    </tr>
    

    @foreach ($order as $order)
    <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->flat_title}}</td>
        <td>{{$order->rent}}</td>
        <td>{{$order->payment_status}}</td>
        <td>
            <img class="img_size" src="/flat/{{$order->image}}">
        </td>

        <td>
          <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
      </td>
    </tr>

    @endforeach

    </table>


</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

