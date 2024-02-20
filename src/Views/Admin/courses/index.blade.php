@extends('layouts.master')
@section('title')
    Course management
@endsection
@section('content')
    <div class="row mt-4 p-0">
        <div class="col-md-2 p-0"></div>
        <div class="col-md ps-4 mt-2">
            <div class="d-sm-flex align-items-center justify-content-between my-4 border py-2 rounded bg-white">
                <h3 class="mb-0 text-black py-1 ps-4">Course List</h3>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <a href="courses/create" class="btn btn-info mt-2 mb-4"><i class="ti-plus"></i></a>
                </div>
                <div class="col-md-4"></div>
                {{-- <div class="col-md">
                    <form action="" method="POST" class="mb-4">
                        <input type="text" name="from">
                        <input type="text" name="to">
                        <button class="btn btn-primary" type="submit" name="search" type="submit">Tìm kiếm</button>
                    </form>
                </div> --}}
            </div>


            <table class="table table-hover table-condensed text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>Thumbnail</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['c_id'] }}</td>
                        <td>{{ $course['c_name'] }}</td>
                        <td>{{ $course['ct_name'] }}</td>
                        <td>{{ number_format($course['c_price'], 0, ',', '.') }} VNĐ</td>
                        <td><img src="{{ $course['c_thumbnail'] }}" alt="" width="100px" height="50px"></td>
                        <td>{{ $course['st_name'] }}</td>
                        <td>
                            <a class="btn btn-info" href="/Admin/courses/{{ $course['c_id'] }}/show"><i class="ti-zoom-in">
                                </i></a>
                            <a class="btn btn-warning" href="/Admin/courses/{{ $course['c_id'] }}/update"><i
                                    class="ti-pencil-alt"> </i></a>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa không ??')"
                                href="/Admin/courses/{{ $course['c_id'] }}/delete"><i class="ti-trash"> </i></a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="col-md-1 p-0"></div>
    </div>
@endsection
