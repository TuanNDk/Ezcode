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
                <h3 class="mt-3 ps-3">Account Detail: <span class="text-danger">{{ $user['username'] }}</span>
                </h3>
            </div>
            <a class="btn btn-info" href="/Admin/users"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-info" href="/Admin/users/{{ $user['id'] }}/update"><i class="ti-pencil-alt"> </i></a>
            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/users/{{ $user['id'] }}/delete"><i class="ti-trash"> </i></a>
            <div class="row mt-3">
                <div class="col-md-2 border-black">
                    <img src="{{ $user['avatar'] }}" alt="" width="180px" height="250px">
                </div>
                <div class="col-md">
                    <table class="table table-striped table-hover table-condensed text-uppercase">

                        <tr>
                            <th>
                            <th>Thông tin tài khoản</th>
                            </th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $user['id'] }}</td>
                        </tr>
                        <tr>
                            <td>UserName</td>
                            <td>
                                {{ $user['username'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>FullName</td>
                            <td>{{ $user['fullname'] }}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            {{-- <td>{{ $user['password'] }}</td> --}}
                            <td>
                                <input class="input border-none" type="password" id="pass" name="pass"
                                    value="{{ $user['password'] }}" disabled style="border:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="eye eye-close">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="eye eye-open hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user['email'] }}</td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td>{{ $user['dob'] }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $user['tel'] }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $user['address'] }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <style>
        .eye {
            position: relative;
            right: -250px;
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
