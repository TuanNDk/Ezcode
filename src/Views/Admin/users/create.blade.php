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
                <h3 class="mb-0 text-black py-1 ps-4"> Add New User </h3>
            </div>
            <a class="btn btn-info" href="/Admin/users"><i class="ti-arrow-left"></i></a>
            <div class="row">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        {{-- <div class="col-md-2">
                            <div class="mt-4 border-black">
                                <img src="" alt="" width="170px"
                                    height="230px">
                            </div>
                            <input type="file" class="form-control mt-4" id="avatar" name="avatar">
                        </div> --}}
                        <div class="col-md">
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label ms-1">Name:</label>
                                <input type="text" class="form-control" id="username" required
                                    placeholder="Enter username ..." name="username">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="fullname" class="form-label ms-1">Full Name:</label>
                                <input type="text" class="form-control" id="fullname" required
                                    placeholder="Enter fullname ..." name="fullname">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="dob" class="form-label ms-1">Date Of Birth:</label>
                                <input type="date" class="form-control" id="dob" required name="dob">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label ms-1">Email:</label>
                                <input type="email" class="form-control" id="email" required
                                    placeholder="Enter email ..." name="email">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="password" class="form-label ms-1">Password:</label>
                                <input type="password" class="form-control" id="password" required
                                    placeholder="Enter password ..." name="password">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="tel" class="form-label ms-1">Tel:</label>
                                <input type="text" class="form-control" id="tel" required
                                    placeholder="Enter phone number..." name="tel">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address" class="form-label ms-1">Address:</label>
                                <input type="text" class="form-control" id="address" required
                                    placeholder="Enter address ..." name="address">
                            </div>

                            <div class="mb-3">
                                <input type="file" class="form-control mt-4" id="avatar" name="avatar">
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
