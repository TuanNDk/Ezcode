@extends('layouts.master')
@section('title')
    Category management
@endsection
@section('content')
    <div class="row mt-4 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md bg-light ps-4 mt-2">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between my-4 border py-2 rounded bg-white">
                <h3 class="mt-3 ps-3">Category Detail: <span class="text-danger">{{ $category['ct_name'] }}</span>
                </h3>
            </div>
            <a class="btn btn-info" href="/Admin/categories"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-info" href="/Admin/categories/{{ $category['ct_id'] }}/update"><i class="ti-pencil-alt">
                </i></a>
            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/categories/{{ $category['ct_id'] }}/delete"><i class="ti-trash"> </i></a>
            <div class="row mt-3">
                <div class="col-md-2">
                    <img src="{{ $category['ct_thumbnail'] }}" alt="" width="200px" height="100px">
                </div>
                <div class="col-md">
                    <table class="table table-striped table-hover table-condensed text-center">
                        <tr>
                            <td>ID</td>
                            <td>{{ $category['ct_id'] }}</td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td>{{ $category['ct_name'] }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{ $category['s_name'] }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
@endsection
