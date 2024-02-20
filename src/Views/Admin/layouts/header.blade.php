<div class="col-md p-0" id="content-wrapper">
    <!-- Content Wrapper -->
    <!-- Main Content -->
    <div id="content" class="container-fluid p-0">

        <!-- Topbar -->
        <nav class="top-bar navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow border">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form action="" method="POST"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2" name="kyw">
                    {{-- <input type="text" name="from">
                    <input type="text" name="to"> --}}
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="search">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>

                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"
                                    name="username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" name="search">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @foreach ($users as $user)
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Xin chào:
                                {{ $user['username'] }}
                            </span>
                            <img class="img-profile rounded-circle" src="{{ $user['avatar'] }}"
                                alt="">
                        @endforeach
                    </a> --}}

                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-black">Xin chào:
                            <span class="text-danger">{{ $_SESSION['user']['username'] }}</span>
                        </span>
                        <img class="img-profile rounded-circle" src="{{ $_SESSION['user']['avatar'] }}" alt="">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="/Admin/users/{{ $_SESSION['user']['id'] }}/show">
                            <a class="dropdown-item" href="/Admin/users/{{ $_SESSION['user']['id'] }}/show">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile </a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Cart
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Changes Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                            <a class="dropdown-item" href="/Admin/logout">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->


    </div>
    <!-- End of Main Content -->


    <!-- End of Content Wrapper -->
</div>
