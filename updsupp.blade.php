<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .upd_dgn
        {
            justify-content:center;
            align-items:center;
            display:flex;

        }
        label
        {
            padding:10px;
            width:150px;
            display:inline-block;
            color:#ffffff;
            font-weight:bold;
        }
        .container-fluid h1
        {
          color:#db4f66;
          text-align:center;
          justify-content:center;
          align-items:center;
        }
        .container-fluid p
        {
          color:#fff;
          text-align:center;
          justify-content:center;
          align-items:center;
        }
        .label_c
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

            <h1 class="admin_h1-headingv1">Update Supplement Inventory Page</h1>
            <p>Make changes to the Supplement Information within this Page</p>
            <div class="upd_dgn">
            <form action="{{ url('supplement_update', $data->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    <div>
        <label for="" class="label_c">>&nbspSupplement Name</label>
        <input type="text" name="suppname" value="{{ $data->suppname }}">
    </div>
    <div>
        <label for="" class="label_c">>&nbpsSupplement Price</label>
        <input type="text" name="price" value="{{ $data->price }}">
    </div>
    <div>
        <label for="" class="label_c">>&nbspCurrent Supplement Image</label>
        <img width="100px" height="auto" src="/supplementfd/{{ $data->suppimage }}">
    </div>
    <div>
        <label for="" class="label_c">>&nbspNew Supplement Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="" class="label_c">>&nbspSupplement Description</label>
        <textarea name="description" id="">{{ $data->description }}</textarea>
    </div>
    <div>
        <label for="" class="label_c">>&nbspSupplement Quantity</label>
        <input type="text" name="suppquantity" value="{{ $data->suppquantity }}">
    </div>
    <div>
        <label for="" class="label_c">>Supplement Category</label>
        <select name="category" id="">
            <option value="{{ $data->category }}">{{ $data->category }}</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Update" class="btn btn-success">
    </div>
</form>

            </div>
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