<?php

namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Controllers\Client\HomeController;
use Pv\BanKhoaHoc\Models\User;




class AuthenticateController extends HomeController
{

    public function login()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];

            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors']['email'] = 'Email phải đúng định dạng và không được để trống!';
            }

            if (empty($password)) {
                $_SESSION['errors']['password'] = 'Mật khẩu không được để trống!';
            }

            $user = (new User)->getByEmailAndPassword($_POST['email'], $_POST['password']);

            if (empty($user)) {
                $_SESSION['errors']['not-found'] = 'Không tìm thấy người dùng !';
            } else {
                $_SESSION['user'] = $user;

                header('Location: /Admin/');
                exit();
            }
        }
        // $_SESSION['errors'] = null;
        return $this->renderViewAdmin(__FUNCTION__);
    }

    public function logout()
    {
        session_destroy();

        header('Location: /');
        exit();
    }
}