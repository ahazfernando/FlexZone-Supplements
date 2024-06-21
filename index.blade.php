<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
      .salesinfo-co-1_h1
      {
        color:#fff;
      }
      .salesinfo-co-1_ul
      {
        color:#fff;
        list-style:none;
        margin-top:50px;
        background-color:#db4f66;
        border-radius:20px;
        width: 45%;
      }
      .salesinfo-co-1_ul h4
      {
        color:#fff;
        list-style:none;
        margin-top:30px;
        color:#fff;
      }
      .salesinfo-co-1_ul p
      {
        color:#fff;
        list-style:none;
        color:#fff;
      }
      .admin_h1-headingv1 h1
      {
        color:#db4f66;
        align-items:center;
        justify-content:center;
        text-align:center;
      }
      .salesinfo-co-1_h1
      {
        color:#db4f66;
        text-align:center;
        justify-content:center;
        align-items:center;
      }
      .salesinfo-co-1_p
      {
        color:#fff;
        text-align:center;
        justify-content:center;
        align-items:center;
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

            @include('admin.body')

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