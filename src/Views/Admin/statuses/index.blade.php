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
                <h3 class="mb-0 text-black py-1 ps-4">Status List</h3>
            </div>
            <a href="statuses/create" class="btn btn-info mt-2 mb-4"><i class="ti-plus"></i></a>
            <div>
                <table class="table table-striped table-hover table-condensed text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statuses as $status)
                            <tr>
                                <td class="fw-bold"> {{ $status['id'] }} </td>
                                <td> {{ $status['name'] }} </td>
                                <td>
                                    <a class="btn btn-info" href="/Admin/statuses/{{ $status['id'] }}/show"><i
                                            class="ti-zoom-in"></i></a>
                                    <a class="btn btn-warning" href="/Admin/statuses/{{ $status['id'] }}/update"><i
                                            class="ti-pencil-alt"></i></a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                                        href="/Admin/statuses/{{ $status['id'] }}/delete"><i class="ti-trash">
                                        </i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1 p-0"></div>
    </div>
    <style>
        .table>tbody>tr>td {
            height: 80px;
            line-height: 80px;
        }
    </style>
@endsection
