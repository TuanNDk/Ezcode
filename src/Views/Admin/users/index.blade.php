@extends('layouts.master')
@section('title')
    Account management
@endsection
@section('content')
    <div class="row mt-4 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md bg-light ps-4 mt-2">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between my-4 border py-2 rounded bg-white">
                <h3 class="mb-0 text-black py-1 ps-4">Account List</h3>
            </div>

            <a href="users/create" class="btn btn-info mt-2 mb-4"><i class="ti-plus"></i></a>
            
            <div>
                <table class="table table-hover table-condensed text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Of Birth</th>
                            <th>Tel</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="fw-bold"> {{ $user['id'] }} </td>
                                <td> {{ $user['username'] }} </td>
                                <td> {{ $user['email'] }} </td>
                                <td> {{ $user['dob'] }} </td>
                                <td> {{ $user['tel'] }} </td>
                                <td>
                                    <img src="{{ $user['avatar'] }}" width="50px">
                                </td>
                                <td>
                                    <a class="btn btn-info" href="/Admin/users/{{ $user['id'] }}/show"><i
                                            class="ti-zoom-in"> </i></a>
                                    <a class="btn btn-warning" href="/Admin/users/{{ $user['id'] }}/update"><i
                                            class="ti-pencil-alt"> </i></a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                                        href="/Admin/users/{{ $user['id'] }}/delete"><i class="ti-trash"> </i></a>
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
            height: 70px;
            line-height: 70px;
            background-color: rgb(232, 236, 236);
        }

        .eye {
            position: relative;
            right: -20px;
            top: 10px;
            transform: translateY(-60%);
            cursor: pointer;
            max-width: 20px;
        }

        .hidden {
            display: none;
        }
    </style>
@endsection
