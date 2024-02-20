@extends('layouts.master')
@section('title')
    Dashboard management
@endsection
@section('content')
    <div class="row my-5 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md bg-light ps-4 mt-3 border">
            <h1>Dashboard</h1>
        </div>
        <div class="col-md-1 p-0"></div>
    </div>
    <div class="row p-0 text-center ">
        <div class="col-md-2 p-0  py-5"></div>

        <div class="col border mr-2  py-5">
            <a class="" href="/Admin/users">Tài khoản:
                <div class="fs-4 text-danger">
                    @foreach ($Accounts as $account)
                        {{ $account }}
                    @endforeach
                </div>
            </a>
        </div>

        <div class="col border mx-2  py-5">
            <a class="" href="/Admin/categories">Danh mục khóa học:
                <div class="fs-4 text-danger">
                    @foreach ($Categories as $category)
                        {{ $category }}
                    @endforeach
                </div>
            </a>
        </div>

        <div class="col border mx-2 py-5">
            <a class="" href="/Admin/courses">Danh sách khóa học:
                <div class="fs-4 text-danger">
                    @foreach ($Courses as $course)
                        {{ $course }}
                    @endforeach
                </div>
            </a>
        </div>

        <div class="col border ms-2 py-5">
            <a class="" href="/Admin/statuses">Danh sách trạng thái:
                <div class="fs-4 text-danger">
                    @foreach ($Statuses as $status)
                        {{ $status }}
                    @endforeach
                </div>
            </a>
        </div>

        <div class="col-md-1 p-0"></div>
    </div>
@endsection
