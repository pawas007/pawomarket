<div class="col-sm-12 col-md-12 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="{{ route('dashboard') }} " class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li> <a href="{{ route('orders') }}" class="{{ Request::routeIs('orders') ? 'active' : '' }}"><i class="fas fa-cart-arrow-down"></i>Orders</a></li>
            <li><a href="{{ route('details') }}"  class="{{ Request::routeIs('details') ? 'active' : '' }}"><i class="fas fa-user"></i>Account
                    details</a>
            </li>






            <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <button type="submit" class="logout_dash"> <i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </ul>
    </div>


    <div class="dashboard_tab_button">
        Admin panel
        <ul role="tablist" class="nav flex-column dashboard-list pt-2">
            <li><a href="{{ route('blog-list') }} " class="{{ Request::routeIs('blog-list') ? 'active' : '' }}"><i class="fab fa-blogger-b"></i>Post list</a></li>
            <li><a href="{{ route('admin.instagram') }} " class="{{ Request::routeIs('admin.instagram') ? 'active' : '' }}"><i class="fab fa-instagram"></i>Instagram</a></li>
            <li><a href="{{ route('contacts-admin') }}"  class="{{ Request::routeIs('contacts-admin') ? 'active' : '' }}">   <i class="far fa-list-alt"></i>   Contact form</a>
            </li>
        </ul>
    </div>


</div>




