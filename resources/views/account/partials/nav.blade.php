<div class="col-sm-12 col-md-12 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="{{ route('dashboard') }} " class="@activeroute('dashboard')"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li> <a href="{{ route('orders') }}" class="@activeroute('orders')"><i class="fas fa-cart-arrow-down"></i>Orders</a></li>
            <li><a href="{{ route('account') }}"  class="@activeroute('account')"><i class="fas fa-user"></i>My account</a></li>
            <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <button type="submit" class="logout_dash"> <i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </ul>
    </div>
    <div class="dashboard_tab_button">
        Admin panel
        <ul role="tablist" class="nav flex-column dashboard-list pt-2">
            <li class="has-dropdown-custom">
                <a href="#" class="custom-dropdown-trigger">

                Blog
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="sub-menu-custom">
                    <li><a href="{{ route('blog.list') }} " class="@activeroute('blog.list')"><i class="far fa-list-alt"></i>List</a></li>
                    <li><a href="{{ route('post.create') }} " class="@activeroute('post.create')"><i class="fas fa-plus"></i>create</a></li>
                    <li><a href="{{ route('tag') }} " class="@activeroute('tag')"><i class="fas fa-tags"></i>Tags</a></li>
                    <li><a href="{{ route('categoryPost') }} " class="@activeroute('categoryPost')"><i class="fas fa-list-ul"></i>Categories</a></li>
                </ul>
            </li>
            <li class="has-dropdown-custom">
                <a href="#" class="custom-dropdown-trigger">
                    Settings
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="sub-menu-custom">
                    <li><a href="{{ route('currency') }}"   class="@activeroute('currency')"> <i class="fas fa-money-bill-wave"></i>Currency</a></li>
                    <li><a href="{{ route('admin.instagram') }} " class="@activeroute('admin.instagram')"><i class="fab fa-instagram"></i>Instagram</a></li>
                </ul>
            </li>



            <li><a href="{{ route('contacts.admin') }}"   class="@activeroute('contacts.admin')">   <i class="far fa-list-alt"></i>Contact form</a></li>
        </ul>
    </div>
</div>




