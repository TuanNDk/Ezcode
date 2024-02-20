@extends('layouts.master')

@section('title')
    Trang chủ
@endsection


@include('layouts.sliders')
@section('content')
    <div class=" bg-light">
        <div class="container">
            <section class="product-list mb-5">
                @include('components.course-entry-1')
            </section>
        </div>
    </div>
@endsection

@section('advertisements')
    @include('layouts.advertisements')
@endsection
