<?php

namespace Pv\BanKhoaHoc\Controllers\Client;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Course;

class CourseController extends Controller
{
    private Course $course;

    public function __construct()
    {
        $this->course = new Course;
    }

    public function show($id)
    {
        $course = $this->course->getByID($id);

        return $this->renderViewClient(
            'course-show',
            [
                'course' => $course,
            ]
        );
    }
}