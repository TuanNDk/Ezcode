<?php


namespace Pv\BanKhoaHoc\Controllers\Admin;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Dashboard;

class DashboardController extends Controller
{
    private Dashboard $dashboard;
    public function __construct()
    {
        $this->dashboard = new Dashboard;
    }
    public function index()
    {
        $data['Accounts']   = $this->dashboard->countAcc();
        $data['Categories'] = $this->dashboard->countCategory();
        $data['Courses']    = $this->dashboard->countCourse();
        $data['Statuses']   = $this->dashboard->countStatus();
        // debug($data);

        return $this->renderViewAdmin(__FUNCTION__, $data);
    }
}