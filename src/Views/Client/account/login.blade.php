<?php

require_once '../header.php';

?>

<div class="container text-center mb-4 mt120">
    <div class="row text-center">
        <div class="col-md-2">
        </div>
        <div class="col-md border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded">
            <div class="row">
                <div class="col">
                    <img class="w-100" src="../../../uploads/login-elearning.png" alt="">
                </div>
                <div class="col">
                    <div class="my-4 text-uppercase text-danger fw-medium fs-3">
                        <span>Đăng nhập</span>
                    </div>

                    <div class="mb-4">
                        <img class="rounded-circle bg-light w-45" src="../../../uploads/avatar-login.png" alt="">
                    </div>

                    <form action="" method="post">
                        <div class="form-group mt-2 mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Tên tài khoản...">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu...">
                        </div>

                        <div class="form-group float-end mt-2">
                            <a href="">Quên mật khẩu</a>
                        </div><br><br>

                        <div class="">
                            <button type="submit" style="width:100%" class="btn btn-primary btn-block">Đăng
                                Nhập</button>
                        </div>
                        <hr>
                        <div class="my-2">
                            <span>Bạn chưa có tài khoản?</span>
                            <a class="text-danger" href="/client/views/register.php">Đăng Ký</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php

require_once '../footer.php';