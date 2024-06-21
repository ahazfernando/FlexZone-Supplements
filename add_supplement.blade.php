<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .supplementform_design
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:60px;
        }
        label
        {
            color:white !important;
            font-size:15px !important;
            font-weight:bold;
            display:inline-block;
            padding-bottom:10px;
            width:300px;
        }
        .supptextfield
        {
          width:200px;
          height:auto;
        }
        .supptextarea
        {
          width:200px;
          height:auto;
        }
        .container-fluid
        {
        }
        .container-fluid h1
        {
          color:#db4f66;
          text-align:center;
          justify-content:center;
          align-items:center;
        }
        .container-fluidp
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
            <h1>Add Supplements to Website</h1>
            <p class="container-fluidp">Add the latest and the greatest supplements here with detailed Information</p>
            <div class="supplementform_design">
                <form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div>
                        <label for="">Supplement Name</label>
                        <input type="text" name="suppname" required class="supptextfield">
                    </div>
                    
                    <div>
                        <label for="">Price</label>
                        <input type="number" name="price" class="supptextfield">
                    </div>

                    <div>
                        <label for="">Supplement Image</label>
                        <input type="file" name="suppimage">
                    </div>
                    
                    <div>
                        <label for="">Supplement Description</label>
                        <textarea name="description" id="" required class="supptextarea"></textarea>
                    </div>

                    <div>
                        <label for="">Available Stock</label>
                        <input type="number" name="suppquantity" class="supptextfield">
                    </div>

                    <div>
                        <label for="">Supplement Category</label>
                        <select name="category" required>
                            <option value="">Choose Category</option>
                            @foreach($category as $category)
                            <option value="">{{$category->category}}</option>
                            @endforeach
                        </select>
                    </div>
                  <!--End of Form-->
                    <div> <!--Submit Button-->
                        <input type="submit" value="Add Supplement" class="btn btn-success">
                    </div>

                </form>
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript Justifaction Links-->
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