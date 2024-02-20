<?php

namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Category;
use Pv\BanKhoaHoc\Models\Course;
use Pv\BanKhoaHoc\Models\Status;

class CourseController extends Controller
{
    private Course $course;

    private string $folder = 'courses.';

    const PATH_UPLOAD = '/uploads/courses/';

    public function __construct()
    {
        $this->course = new Course;
    }

    public function index()
    {
        if (!empty($_POST)) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = '';
        }

        // if (!empty($_POST)) {
        //     $from = $_POST['from'];
        //     $to = $_POST['to'];
        // } else {
        //     $from = '';
        //     $to = '';
        // }


        $data['courses'] = $this->course->getByKyw($kyw);
        // $data['courses'] = $this->course->getByPrice($from, $to);
        // debug($data['courses']);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function create()
    {
        $data['categories'] = (new Category)->getAll();
        $data['statuses'] = (new Status)->getAll();

        if (!empty($_POST)) {
            $_SESSION['errors'] = [];

            $name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $status_id = $_POST['status_id'];

            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = null;

            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];

                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }

            $this->course->insert($name, $category_id, $description, $price, $status_id, $thumbnailPath);
            header('Location: /Admin/courses');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function show($id)
    {
        $data['course'] = $this->course->getByID($id);

        if (empty($data['course'])) {
            e404();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function delete($id)
    {
        $course = $this->course->getByID($id);

        if (empty($course)) {
            e404();
        }

        $this->course->deteleByID($course['id']);

        if (!$course['thumbnail'] && file_exists(PATH_ROOT . $course['thumbnail'])) {
            unlink(PATH_ROOT . $course['thumbnail']);
        }

        header('Location: /Admin/courses');
        exit();
    }

    public function update($id)
    {
        $data['course'] = $this->course->getByID($id);
        // debug($data['course']);
        if (empty($data['course'])) {
            e404();
        }

        if (!empty($_POST)) {

            $name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $status_id = $_POST['status_id'];

            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = $data['course']['c_thumbnail'];
            $move = false;

            if (!$thumbnail) {

                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];

                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $data['course']['c_thumbnail'];
                } else {
                    $move = true;
                }
            }

            $this->course->update($id, $name, $category_id, $description, $price, $status_id, $thumbnailPath);

            if ($move && $data['course']['c_thumbnail'] && file_exists(PATH_ROOT . $data['course']['c_thumbnail'])) {
                unlink(PATH_ROOT . $data['course']['c_thumbnail']);
            }

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /Admin/courses/$id/update");
            exit();
        }

        $data['categories'] = (new Category)->getAll();
        $data['statuses'] = (new Status)->getAll();

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
}