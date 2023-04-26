<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #07ffff;">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li style="background-color: #07ffff;" class="nav-item card m-1">
                <a class="nav-link" href="#">
                    <span class="inner-circle" style="width: 25px; height: 25px;" data-feather="user"></span>
                    <span style="font-size:25px;">Admin</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu0" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu0' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">View Profile</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Edit Profile</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="list"></span>
                    Medicine <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?php echo route('test/re'); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Add Medicine</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Medicine List</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Medicine Stock</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="shopping-cart"></span>
                    Customer <span class="sr-only">(current)</span>
                </a>
            </li>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Add Customer</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">All Customer</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="file"></span>
                    Invoice
                </a>
            </li>
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Add Invoice</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">All Invoice</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="shopping-cart"></span>
                    Supplier
                </a>
            </li>
            <div id='submenu4' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Add Supplier</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">All Supplier</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="shopping-cart"></span>
                    Purchase
                </a>
            </li>
            <div id='submenu5' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Purchase Medicine</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Manage Purchase</span>
                </a>
            </div>

            <li class="nav-item">
                <a class="nav-link active" href="#submenu6" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <div id='submenu6' class="collapse sidebar-submenu">
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Daily Salse Report</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Monthly Salse Report</span>
                </a>
                <a href="<?php echo route(''); ?>" class="list-group-item list-group-item-action text-black" style="background-color: #afffff;">
                    <span class="menu-collapsed">Monthly Salse Report</span>
                </a>
            </div>
        </ul>

    </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Title</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span> This week
            </button>
        </div>
    </div>