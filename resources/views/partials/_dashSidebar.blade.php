<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark"  id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>
                    <a class="nav-link" href="showstudent"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Students</a>
                    <a class="nav-link" href="showroom"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Rooms</a>

                        <div class="sb-sidenav-menu-heading">Add-ons</div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                        ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Announcements
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="announcement">Create</a>
                                            <a class="nav-link" href="showannounce">View</a></nav>
                                    </div>
                                    <a class="nav-link" href="showcomplaint"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Complaints</a>
                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">@yield('name')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">@yield('crumb')</li>
                </ol>
                @yield('content')


            </div>
        </main>
        @include('partials._dashFooter')
    </div>
</div>
