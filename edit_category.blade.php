<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .categoryupform
        {
            display:flex;
            margin:10px;
            justify-content:center;
        }
        .updateform
        {
            padding:15px;
        }

        input[type="text"]
        {
            height:40px;
            width:auto;
        }

    </style>
  </head>
  <body>
    @include('admin.headersection')
    <div class="d-flex align-items-stretch">
      <!--Navigation Panel-->
      @include('admin.admindropdown')
      <!--Dashboard Content-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 class="admin_h1-headingv1">Update Product Category</h1>
            <div class="categoryupform">
                
                    <form action="{{url('categoryupdate',$data->id)}}" method="post" class="updateform">
                        @csrf
                        <input name="category" value="{{$data->category}}" type="text">
                        <input type="submit" value = "Update" class="btn btn-light">
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