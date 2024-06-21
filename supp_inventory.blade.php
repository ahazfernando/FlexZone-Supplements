<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .invtddesign
        {
            justify-content:center;
            display:flex;
            align-items:center;
            margin-top:10px;
            
        }
        .invt_table
        {
            border:2px solid;
        }
        th
        {
            color:white;
            font-weight:bold;
            padding: 12px;
            background-color:grey;
        }
        td
        {
            color:#FFF;
        }
        .supplementimg
        {
            height:50px;
            width:auto;
            border-radius:25px;
        }
        .pag_css
        {
          margin-top:15px;
          justify-content:center;
          display:flex;
          
        }
        .container-fluid
        {
          text-align:center;
          justify-content:center;
          align-items:center;
        }
        .container-fluid h1
        {
          color:#db4f66;
        }
        .container-fluid p
        {
          color:#fff;
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

            <h1>Supplement Inventory</h1>
            <p>All available products within the Store can be accessed and viewed here</p>

            <div class="invtddesign">
            <table class="invt_table" border="1px">
                <tr class="invt_head">
                    <th>Supplement Name</th>
                    <th>Supplement Price</th>
                    <th>Supplement Image</th>
                    <th>Supplement Description</th>
                    <th>Available Stock</th>
                    <th>Update Product</th>
                    <th>Remove Product</th>
                </tr>
                @foreach($supplement as $supp)
                <tr>
                    <td>{{$supp->suppname}}</td>
                    <td>{{$supp->price}}</td>
                    <td><img src="supplementfd/{{$supp->suppimage}}" alt="Supplement Image" class="supplementimg"></td>
                    <td>{!!Str::limit($supp->description,20)!!}</td>
                    <td>{{$supp->suppquantity}}</td>
                    <td><a href="{{url('supp_up',$supp->id)}}" class="btn btn-success">Update</a></td>
                    <td><a class="btn btn-danger" href="{{url('remove_supp',$supp->id)}}">Remove</a></td>
                </tr>
                @endforeach
                
            </table>
            
            </div>
            <div class="pag_css">{{$supplement->onEachSide(2)->links()}}</div><!--Links to the website-->
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