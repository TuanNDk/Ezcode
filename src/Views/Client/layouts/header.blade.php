<section class="header bg-white" style="border-bottom: 2px solid #ccc">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center mt-2">
                <div class="logo">
                    <a href="/"><img class="img" src="../../../../uploads/background/logo.jpg" alt="logo"
                            height="70px"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm khóa học, video, bài viết ..."
                            aria-label="Tìm kiếm khóa học, video, bài viết ..." aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>

                    @php
                        $categories = (new \Pv\BanKhoaHoc\Models\Category())->getCategoryForMenu()
                    @endphp
                    <nav class="row navbar navbar-expand-lg" style="margin-top: -10px;">
                        <div class="container-fluid">
                            <a class="navbar-brand d-none" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item pe-2">
                                        <a class="nav-link text-primary active" aria-current="page" href="/"><i
                                                class="fa-solid fa-house"></i> Trang chủ</a>
                                    </li>

                                    <li class="nav-item pe-2">
                                        <a class="nav-link text-primary" href="#">Giới thiệu</a>
                                    </li>

                                    <li class="nav-item pe-2 dropdown">
                                        <a class="nav-link text-primary dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Khóa học
                                        </a>
                                        <ul class="dropdown-menu dropend">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a class="dropdown-item text-primary"
                                                        href="/category-show/{{ $category['id'] }}">{{ $category['name'] }}
                                                    </a>                                            
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item pe-2">
                                        <a class="nav-link text-primary" href="#">Tin tức</a>
                                    </li>
                                    <li class="nav-item pe-2">
                                        <a class="nav-link text-primary" href="#">Blogs</a>
                                    </li>
                                    <li class="nav-item pe-2">
                                        <a class="nav-link text-primary" href="#">Đề thi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="row">
                    <div class="col mt-2 text-center" style="border-right: 3px solid #ccc;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fs-3 text-danger ps-1 pt-1">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-9">Tư vấn hỗ trợ<br><span class="text-danger">0909 990 130</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fs-3 text-danger ps-1 pt-1">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-9 login">
                                <a class="" href="Views/Client/account/register">Đăng ký</a> <br>
                                <a href="/client/account/login">Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .header {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100000;
    }
</style>
