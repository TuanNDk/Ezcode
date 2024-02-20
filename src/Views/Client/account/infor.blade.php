<?php
require_once "../header.php";
?>

<div class="container mb-2 mt120 ">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="row">
                <div class="col-md-2 border-end bg-light">
                    <div class="border-bottom border-bottom-danger">
                        <div class="my-3 text-center">
                            <img class="rounded-circle bg-light" src="../../../uploads/avatar-login.png" alt=""
                                style="width:100px">
                        </div>

                        <!-- <input type="file" name="img" id=""> -->
                        <h5 class="mb-4 text-center fs-6">Xin chào:
                            <span class="text-danger"><!-- <?= $username ?> -->TuanND</span>
                        </h5>
                        <hr>
                        <div class="my-2">
                            <a href="">Thông tin tài khoản</a>
                        </div>
                        <div class="my-2">
                            <a href="">Các khóa học đã đăng ký</a>
                        </div>
                        <div class="my-2">
                            <a href="">Các bài thi đã làm</a>
                        </div>
                    </div>
                </div>

                <div class="col-md bg-light">
                    <div class="my-3 text-center text-uppercase text-danger fw-medium">
                        <h3>Thông tin tài khoản</h3>
                    </div>
                    <hr>
                    <form class="form" method="post">
                        <div class="row my-4 m-auto">
                            <div class="col-md-6">
                                <div class="avatar">
                                    <img class="rounded-circle bg-light mb-3" src="../../../uploads/avatar-login.png"
                                        alt="" style="width:100px">
                                    <div class="mb-3">
                                        <input class="form-control" id="formFileSm" type="file">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Tên tài khoản: </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control border rounded" disabled>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Số điện thoại: </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control border rounded" disabled>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Mật khẩu: </div>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control border rounded" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5">
                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Họ và tên: </div>
                                    <div class="col-md">
                                        <input type="text" name="username" class="form-control border rounded">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Email: </div>
                                    <div class="col-md">
                                        <input type="email" name="email" class="form-control border rounded">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Ngày sinh: </div>
                                    <div class="col-md">
                                        <input type="date" name="dob" class="form-control border rounded">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Địa chỉ: </div>
                                    <div class="col-md">
                                        <input type="text" name="address" class="form-control border rounded">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 mt-2">Giới tính: </div>
                                    <div class="col-md-8">
                                        <select class="form-select" name="gender" id="">
                                            <option value="0"> Nam </option>
                                            <option value="1"> Nữ </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-primary my-3" name="update">Cập nhật</button>
                            <button type="reset" class="btn btn-primary my-3">Hủy</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>




<?php
require_once "../footer.php";