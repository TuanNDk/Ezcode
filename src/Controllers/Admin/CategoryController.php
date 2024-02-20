<?php
namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Category;
use Pv\BanKhoaHoc\Models\Status;



class CategoryController extends Controller
{
    private Category $category;

    private string $folder = 'categories.';

    const PATH_UPLOAD = '/uploads/categories/';

    public function __construct()
    {
        $this->category = new Category;
        $this->status = new Status;
    }

    public function index()
    {
        if (!empty($_POST)) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = '';
        }

        $data['categories'] = $this->category->getByKyw($kyw);

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function create()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];

            $name = $_POST['name'];
            $status_id = $_POST['status_id'];

            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = null;

            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];

                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }

            $category = (new Category)->getByCategoryName($name);

            if (!empty($category)) {
                $_SESSION['errors']['CategoryName'] = 'Danh mục đã tồn tại!';
            } else {
                $this->category->insert($name, $status_id, $thumbnailPath);
                $_SESSION['success'] = 'Thao tác thành công!';
                header('Location: /Admin/categories');
                exit();
            }
        }

        $data['statuses'] = (new Status)->getAll();

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function show($id)
    {
        $category = $this->category->getByID($id);

        if (empty($category)) {
            e404();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['category' => $category]);
    }

    public function detele($id)
    {
        $category = $this->category->getByID($id);

        if (empty($category)) {
            e404();
        }

        $this->category->deleteByID($category['id']);

        header('Location: /Admin/categories');
        exit();
    }

    public function update($id)
    {
        $data['category'] = $this->category->getByID($id);

        if (empty($data['category'])) {
            e404();
        }

        if (!empty($_POST)) {
            $_SESSION['errors'] = [];
            $_SESSION['success'] = [];

            $name = $_POST['name'];
            $status_id = $_POST['status_id'];

            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = $data['category']['ct_thumbnail'];
            $move = false;

            if ($thumbnail) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];

                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $data['category']['ct_thumbnail'];
                } else {
                    $move = true;
                }
            }

            // $category = (new Category)->getByCategoryName($name);

            // if (!empty($category)) {
            //     $_SESSION['errors']['Category_Name'] = 'Danh mục đã tồn tại';
            // } else {
            $this->category->update($id, $name, $thumbnailPath, $status_id);

            if ($move && $data['category']['ct_thumbnail'] && file_exists(PATH_ROOT . $data['category']['ct_thumbnail'])) {
                unlink(PATH_ROOT . $data['category']['ct_thumbnail']);
            }

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /Admin/categories/$id/update");
            exit();
            // }
        }

        $data['statuses'] = (new Status)->getAll();

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

}