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
                {{-- <h3 class="mb-0 text-black py-1 ps-4">Add New User</h3> --}}
                <h1 class="mt-3 ps-3">Update status: <span class="text-danger">{{ $status['name'] }}</span>
                </h1>
            </div>
            <a class="btn btn-info mb-3" href="/Admin/statuses"><i class="ti-arrow-left"></i></a>
            <a class="btn btn-danger mb-3" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                href="/Admin/statuses/{{ $user['id'] }}/delete"> <i class="ti-trash"> </i> </a>
                
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

            <div class="row">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label ms-1">Name:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $status['name'] }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection
