@extends('layouts.master')

@section('title')
    {{ $category['ct_name'] }}
@endsection
@php
    $courses = (new \Pv\BanKhoaHoc\Models\Course())->getAll();
@endphp
@section('content')
    <div class="container mt120">
        <div class="row">
            <div class="col">
                <div class="mb-5">
                    <h2>{{ $category['ct_name'] }}</h2>
                </div>

                <div class="row mb-4">
                    @foreach ($courses as $course)
                        @if ($category['ct_id'] == $course['c_category_id'])
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <a href="/course/{{ $course['c_id'] }}">
                                        <img class="rounded" src="{{ $course['c_thumbnail'] }}" alt="" width="100%"
                                            , height="150px">
                                    </a>
                                </div>

                                <span class="mb-2 d-inline-flex fw-semibold">{{ $course['c_name'] }}</span>

                                <div class="row mb-2">
                                    <div class="col text-decoration-line-through">
                                        {{ number_format($course['c_price'] * 1.2, 0, ',', '.') }} VNĐ</div>
                                    <div class="col text-danger">{{ number_format($course['c_price'], 0, ',', '.') }} VNĐ
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-users"></i> 1000
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        {{-- @include('comments.comment') --}}


    </div>
@endsection
