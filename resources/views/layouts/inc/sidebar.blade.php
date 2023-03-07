

<div class="sidebar" data-image="../assets/img/sidebar-5.jpg" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        E-biashara 
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item {{Request::is('dashboard') ? 'active':''}}">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('categories') ? 'active':''}}">
                        <a class="nav-link" href="{{route('categories')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('add-category') ? 'active':''}}">
                        <a class="nav-link" href="{{route('add-category')}}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('products') ? 'active':''}}">
                        <a class="nav-link" href="{{route('products')}}">
                            <i class="nc-icon nc-apple"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('add-products') ? 'active':''}}">
                        <a class="nav-link" href="{{route('add-products')}}">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>Add Products</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('orders') ? 'active':''}}">
                        <a class="nav-link" href="{{route('orders')}}">
                            <i class="nc-icon  nc-delivery-fast"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('users') ? 'active':''}}">
                        <a class="nav-link" href="{{route('users')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                 
                   
                </ul>
            </div>
        </div>