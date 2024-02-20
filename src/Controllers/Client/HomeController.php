<?php

namespace Pv\BanKhoaHoc\Controllers\Client;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Course;




class HomeController extends Controller
{
    private Course $course;

    public function __construct()
    {
        $this->course = new Course;
    }
    public function index()
    {


        return $this->renderViewClient('content');
    }
}