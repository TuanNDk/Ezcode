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
                <h3 class="mb-0 text-black py-1 ps-4"> Add New Course </h3>
            </div>
            <a class="btn btn-info" href="/Admin/courses"><i class="ti-arrow-left"></i></a>
            @if (!empty($_SESSION['errors']))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($_SESSION['errors'] as $key => $error)
                            <li>Key: {{ $key }} - ERROR: {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" required placeholder="Enter name course"
                            name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Category_Name:</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category['ct_id'] }}">
                                    {{ $category['ct_name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Description:</label><br>
                        <textarea name="description" id="description" cols="130" rows="5"></textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Price:</label>
                        <input type="text" class="form-control" id="price" required placeholder="Enter price"
                            name="price">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Status:</label>
                        <select name="status_id" id="status_id">
                            @foreach ($statuses as $status)
                                <option value="{{ $status['id'] }}">
                                    {{ $status['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="thumbnail" class="form-label">Thumbnail:</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
