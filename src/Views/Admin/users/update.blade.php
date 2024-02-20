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
                {{-- <h3 class="mb-0 text-black py-1 ps-4">Add New User</h3> --}}
                <h1 class="mt-3 ps-3">Update Account: <span class="text-danger">{{ $user['username'] }}</span>
                </h1>
            </div>

            <a class="btn btn-info mb-3" href="/Admin/users"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-danger mb-3" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/users/{{ $user['id'] }}/delete"> <i class="ti-trash"> </i> </a>
            <div class="row">
                
                @if (!empty($_SESSION['errors']))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($_SESSION['errors'] as $key => $error)
                                <li>Key: {{ $key }} - ERROR: {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @php
                        $_SESSION['errors'] = null;
                    @endphp
                @endif

                @if (!empty($_SESSION['success']))
                    <div class="alert alert-success">
                        {{ $_SESSION['success'] }}
                    </div>

                    @php
                        $_SESSION['success'] = null;
                    @endphp
                @endif

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mt-4 border-black">
                                <img src="{{ $user['avatar'] }}" alt="{{ $user['avatar']['name'] }}" width="170px"
                                    height="230px">
                            </div>
                            <input type="file" class="form-control mt-4" id="avatar" name="avatar">
                        </div>

                        <div class="col-md">
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label ms-1">Name:</label>
                                <input type="text" class="form-control" id="username" required name="username"
                                    value="{{ $user['username'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="fullname" class="form-label ms-1">Full Name:</label>
                                <input type="text" class="form-control" id="fullname" required name="fullname"
                                    value="{{ $user['fullname'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="dob" class="form-label ms-1">Date Of Birth:</label>
                                <input type="date" class="form-control" id="dob" required name="dob"
                                    value="{{ $user['dob'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label ms-1">Email:</label>
                                <input type="email" class="form-control" id="email" required name="email"
                                    value="{{ $user['email'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="password" class="form-label ms-1">Password:</label>
                                <input type="password" class="form-control" id="password" required name="password"
                                    value="{{ $user['password'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="tel" class="form-label ms-1">Tel:</label>
                                <input type="text" class="form-control" id="tel" required name="tel"
                                    value="{{ $user['tel'] }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address" class="form-label ms-1">Address:</label>
                                <input type="text" class="form-control" id="address" required name="address"
                                    value="{{ $user['address'] }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-1 p-0"></div>
    </div>
    <style>
        .table>tbody>tr>td {
            height: 40px;
            line-height: 40px
        }
    </style>
@endsection
