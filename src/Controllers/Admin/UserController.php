<?php

namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\User;


class UserController extends Controller
{
    private User $user;

    private string $folder = 'users.';

    const PATH_UPLOAD = '/uploads/users/';

    public function __construct()
    {
        $this->user = new User;
    }


    // public function index()
    // {
    //     $data['users'] = $this->user->getAll();

    //     return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    // }

    public function index()
    {
        if (!empty($_POST)) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = '';
        }

        $data['users'] = $this->user->getByKyw($kyw);
        // debug($data);

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function create()
    {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $dob = $_POST['dob'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $avatar = $_FILES['avatar'] ?? null;
            $avatarPath = null;

            if (!empty($avatar)) {

                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];

                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = null;
                }
            }

            $this->user->insert($username, $fullname, $dob, $tel, $address, $email, $password, $avatarPath);
            header('Location: /Admin/users');
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }


    public function show($id)
    {
        $user = $this->user->getByID($id);

        if (empty($user)) {
            e404();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['user' => $user]);
    }

    public function delete($id)
    {
        $user = $this->user->getByID($id);

        if (empty($user)) {
            e404();
        }

        $this->user->deleteByID($user['id']);

        if (!empty($user['avatar']) && file_exists(PATH_ROOT . $user['avatar'])) {
            unlink(PATH_ROOT . $user['avatar']);
        }

        header('Location: /Admin/users');
        exit();
    }

    public function update($id)
    {
        $data['user'] = $this->user->getByID($id);

        if (empty($data['user'])) {
            e404();
        }

        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $dob = $_POST['dob'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $avatar = $_FILES['avatar'] ?? null;
            $avatarPath = $data['user']['avatar'];
            $move = false;

            if ($avatar) {

                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];

                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = $data['user']['avatar'];
                } else {
                    $move = true;
                }
            }

            $this->user->update($id, $username, $fullname, $dob, $tel, $address, $email, $password, $avatarPath);

            if ($move && $data['user']['avatar'] && file_exists(PATH_ROOT . $data['user']['avatar'])) {
                unlink(PATH_ROOT . $data['user']['avatar']);
            }

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /Admin/users/$id/update");
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    // public function search($kyw)
    // {
    //     if (isset($_POST['search'])) {
    //         $kyw = $_POST['kyw'];
    //     } else {
    //         $kyw = "";
    //     }

    //     $user = $this->user->getByKyw($kyw);

    //     // debug($user);

    //     if (empty($user)) {
    //         e404();
    //     }

    //     return $this->renderViewAdmin($this->folder . __FUNCTION__, ['user' => $user]);
    // }
}

