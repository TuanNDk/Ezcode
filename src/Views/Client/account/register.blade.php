<?php
require_once '../header.php';
?>

<div class="container text-center mb-4 mt120">
    <div class="row text-center">
        <div class="col-md-2"></div>
        <div class="col-md border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded">
            <div class="row">
                <div class="col">
                    <img class="mt-5 w-100" src="../../../uploads/login-elearning.png" alt="">
                </div>
                <div class="col">
                    <div class="my-3 text-uppercase text-danger fw-medium fs-3">
                        <span>Đăng ký</span>
                    </div>

                    <div class="mb-2">
                        <img class="rounded-circle bg-light w-45" src="../../../uploads/avatar-login.png" alt="">
                    </div>

                    <form action="" method="post">
                        <div class="form-group mt-2 mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản..."
                                required>
                        </div>

                        <div class="form-group mt-2 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Nhập email..." required>
                        </div>

                        <div class="form-group mt-2 mb-3">
                            <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu..."
                                required>
                        </div>

                        <div class="form-group mt-2 mb-3">
                            <input type="text" name="password_confirm" class="form-control"
                                placeholder="Nhập lại mật khẩu..." required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block my-3">Đăng Ký</button>
                        </div>

                        <div class="my-2">
                            <span>Bạn đã có tài khoản?</span>
                            <a class="text-danger" href="/client/views/login.php">Đăng nhập</a>
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