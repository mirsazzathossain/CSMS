<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> CSMS </sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active':'' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-home"></i>
            <span>Website</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Cars
    </div>

    <li class="nav-item {{ request()->routeIs('car.index') ? 'active':'' }}">
        <a class="nav-link" href="{{route('car.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>List of Cars</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('car.create') ? 'active':'' }}">
        <a class="nav-link" href="{{route('car.create')}}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Add new Car</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>