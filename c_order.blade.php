<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type = "text/css">
        th
        {
            padding:10px;
            background-color:#db4f66;
            color:#fff;
        }
        td
        {
            padding:10px;
            color:white;
        }
        
    </style>
  </head>
  <body>
    @include('admin.headersection')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.admindropdown')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table border="1px">
                <tr>
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Customer Address</th>
                    <th>Supplement Name</th>
                    <th>Supplement Price</th>
                    <th>Supplement Image</th>
                    <th>Order Status</th>
                    <th>Change Status</th>
                </tr>

                @foreach($supplement as $supplement)
                <tr>
                    <td>{{$supplement->cus_name}}</td>
                    <td>{{$supplement->cus_tel}}</td>
                    <td>{{$supplement->cus_add}}</td>
                    <td>{{$supplement->supplement->suppname}}</td>
                    <td>{{$supplement->supplement->price}}</td>
                    <td><img src="supplementfd/{{$supplement->supplement->suppimage}}" alt="Image of the Produc the Customer Ordered" width="75px"></td>
                    <td>@if($supplement == 'Order at Transit') <span>{{$supplement->order_status}}</span>@else <span style="color:green;">{{ $supplement->order_status }}</span>@endif</td>
                    <td><a href="{{url('status_otw',$supplement->id)}}" class="btn btn-danger">On the Way</a><a href="{{url('complete',$supplement->id)}}" class="btn btn-success">Delivered</a></td>
                </tr>
                @endforeach
            </table>
            

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>