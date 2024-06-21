<nav id="sidebar">
        <!-- Headers for the Sidebar-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/dilshan_admin001.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Dilshan Hope</h1>
            <p>Database Admin</p>
          </div>
        </div>
        <!--Navigation Menus for the Admin Drop down section--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="{{url('admin\dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category</a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Supplements</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('supp_inventory')}}">Supplement Inventory</a></li>
                    <li><a href="{{url('add_supplement')}}">Add Supplement</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('c_purchaseview') }}"> <i class="icon-grid"></i>Customer Purchases</a></li>
        </ul>
      </nav>