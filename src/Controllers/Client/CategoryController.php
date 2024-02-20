<?php

namespace Pv\BanKhoaHoc\Controllers\Client;

use Pv\BanKhoaHoc\Commons\Controller;
use Pv\BanKhoaHoc\Models\Category;
use Pv\BanKhoaHoc\Models\Course;

class CategoryController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category;
    }

    public function show($id)
    {
        $category = $this->category->getByID($id);
        return $this->renderViewClient(
            'category-show',
            [
                'category' => $category,
            ]
        );
    }
}