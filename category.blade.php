<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        input[type="text"] {
            width: 300px;
            height: 40px;
            padding: right 5px;
            border-radius: 10px;
        }
        .div_textdn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        .cattable {
            text-align: center;
            margin: auto;
            border: 1px solid white;
            margin: top 50px;
        }
        th {
            background-color: grey;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        td {
            padding: 2px;
        }
        .container-fluid h1 {
            color: #db4f66;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .container-fluid p {
            color: #fff;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
    </style>
  </head>
  <body>
    @include('admin.headersection')
    <div class="d-flex align-items-stretch">
      @include('admin.admindropdown')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 class="admin_h1-headingv1">Add Category</h1>
            <p>Add the different categories for the products which are going to be made available on the website</p>
            <div class="div_textdn">
                <form action="{{ url('add_category') }}" method="post">
                @csrf
                <div>
                    <input type="text" name="category" required>
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
                </form>
            </div>

            <div>
                <table class="cattable">
                    <tr>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{ $data->category }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_category', $data->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

          </div>
      </div>
    </div>
    <script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        return swal(
            {
                title: "Are you sure you want to Delete the Record?",
                text: "Note that this Action is permanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }
        ).then((willCancel) => {
            if (willCancel) {
                window.location.href = urlToRedirect;
            }
        });
    }
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>
