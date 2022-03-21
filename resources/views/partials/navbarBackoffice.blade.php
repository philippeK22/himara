{{-- <div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src={{ asset("assets/images/logo/logo.png") }} alt="Logo" srcset=""></a>
</div>

<div class="toggler">
    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
</div>
</div>
</div>
<div class="sidebar-menu">
    <ul class="menu">
        {{-- <li class="sidebar-title">Bonjour</li>
                <li class="sidebar-title">nom : {{ Auth::user()->name}}</li>
        <li class="sidebar-title">prenom : {{ Auth::user()->prenom}}</li> --}}
        {{-- <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : ''; }} ">
        <a href={{ route("dashboard") }} class='sidebar-link'>
            {{-- <a href="#" class='sidebar-link'> --}}
            {{-- <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/room') ? 'active' : ''; }} ">
            <a href={{ route("room.index") }} class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>room</span>
            </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/staff') ? 'active' : ''; }}">
                <a href={{ route("staff.index") }} class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Team</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/blog') ? 'active' : ''; }}">
                <a href={{ route("blog.index") }} class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Blog</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/gallery') ? 'active' : ''; }}">
                <a href={{ route("gallery.index") }} class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/contact') ? 'active' : ''; }}">
                <a href={{ route("contact.index") }} class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Contact</span>
                </a>
            </li>

    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div> --}}

<div class="container-fluid w-25 m-0">
    {{-- <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div> --}}
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark w-100">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item my-2">Bonjour</li>
                    <li class="nav-item my-2">nom : {{ Auth::user()->name}}</li>
                    <form action="{{ route("logout") }}" method="POST">
                        @csrf

                        <button class="btn btn-danger" type="submit">Logout</button>

                    </form>
                    <li class="nav-item mY-2">Menu</li>

                    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : ''; }}" >
                        <a href="{{ route("dashboard") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('admin/room') ? 'active' : ''; }}">
                        <a href="{{ route("room.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Room</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/staff') ? 'active' : ''; }}">
                        <a href="{{ route("staff.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Team</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/blog') ? 'active' : ''; }}">
                        <a href="{{ route("blog.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Blog</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/gallery') ? 'active' : ''; }}">
                        <a href="{{ route("gallery.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/contact') ? 'active' : ''; }}">
                        <a href="{{ route("contact.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Contact</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>
