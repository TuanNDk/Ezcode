@extends('layouts.master')
@section('title')
    Course management
@endsection
@section('content')
    <div class="row mt-4 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md bg-light ps-4 mt-2">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between my-4 border py-2 rounded bg-white">
                <h3 class="mt-3 ps-3">Course Detail: <span class="text-danger">{{ $course['c_name'] }}</span>
                </h3>
            </div>
            <a class="btn btn-info" href="/Admin/courses"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-info" href="/Admin/courses/{{ $course['c_id'] }}/update"><i class="ti-pencil-alt">
                </i></a>
            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/courses/{{ $course['c_id'] }}/delete"><i class="ti-trash"> </i></a>
            <div class="row mt-3">
                <div class="col-md-2">
                    <img src="{{ $course['c_thumbnail'] }}" alt="" width="200px" height="100px">
                </div>
                <div class="col-md">
                    <table class="table table-striped table-hover table-condensed text-center">
                        <tr>
                            <td>ID</td>
                            <td>{{ $course['c_id'] }}</td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td>{{ $course['c_name'] }}</td>
                        </tr>
                        <tr>
                            <td>Category Name</td>
                            <td>{{ $course['ct_name'] }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ number_format($course['c_price'], 0, ',', '.') }} VNĐ</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{ $course['st_name'] }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
@endsection
