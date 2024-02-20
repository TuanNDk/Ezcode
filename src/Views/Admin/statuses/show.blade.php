@extends('layouts.master')
@section('title')
    Status management
@endsection
@section('content')
    <div class="row mt-4 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md bg-light ps-4 mt-2">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between my-4 border py-2 rounded bg-white">
                <h3 class="mt-3 ps-3">Status Detail: <span class="text-danger">{{ $status['name'] }}</span>
                </h3>
            </div>
            <a class="btn btn-info" href="/Admin/statuses"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-info" href="/Admin/statuses/{{ $category['id'] }}/update"><i class="ti-pencil-alt">
                </i></a>
            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/statuses/{{ $category['id'] }}/delete"><i class="ti-trash"> </i></a>
            <div class="row mt-3">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md">
                    <table class="table table-striped table-hover table-condensed text-center">
                        <tr>
                            <td>ID</td>
                            <td>{{ $status['id'] }}</td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td>{{ $status['name'] }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
@endsection
