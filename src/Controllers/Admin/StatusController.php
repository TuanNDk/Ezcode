<?php

namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Status;

class StatusController extends Controller
{
    private Status $status;

    private string $folder = 'statuses.';

    const PATH_UPLOAD = '/uploads/statuses/';

    public function __construct()
    {
        $this->status = new Status;
    }


    public function index()
    {
        $data['statuses'] = $this->status->getAll();

        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }


    public function create()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];

            $status = (new Status)->getByStatusName($name);

            if (!empty($status)) {
                $_SESSION['errors']['Status_Name'] = 'Status already exists !';
            } else {
                $this->status->insert($name);
                header('Location: /Admin/statuses');
                exit();
            }
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }


    public function show($id)
    {
        $data['status'] = $this->status->getByID($id);

        if (empty($data['status'])) {
            e404();
        }
        
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }

    public function delete($id)
    {
        $status = $this->status->getByID($id);

        if (empty($status)) {
            e404();
        }

        $this->status->deleteByID($status['id']);


        header('Location: /Admin/statuses');
        exit();
    }

    public function update($id)
    {
        $status = $this->status->getByID($id);

        if (empty($status)) {
            e404();
        }


        if (!empty($_POST)) {
            $name = $_POST['name'];

            $status = (new Status)->getByStatusName($name);

            if (!empty($status)) {
                $_SESSION['errors']['Status_Name'] = 'Status already exists !';
            } else {
                $this->status->update($id, $name);

                $_SESSION['success'] = 'Thao tác thành công!';

                header("Location: /Admin/statuses/$id/update");
                exit();
            }
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['status' => $status]);
    }

}