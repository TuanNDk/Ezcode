@extends('layouts.master')

@section('title')
    {{ $course['c_name'] }}
@endsection

@section('content')
    <div class="container mt120">
        <div class="row">

            <!-- Nav Left -->
            <div class="col-md-8">
                <div class="mb-5">
                    <h2>{{ $course['c_name'] }}</h2>
                    <p>Học tiếng Nhật cơ bản phù hợp với người chưa từng học tiếng Nhật. <br>
                        Với hơn 100 bài học và bài tập thực hành sau mỗi video.</p>
                </div>

                <div class="content">
                    <div class="row">
                        
                        <div class="fw-bold fs-5 mb-2">
                            <p>Bạn sẽ học được gì?</p>
                        </div>

                        <div class="col-md-6">
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Nắm được các từ vựng sơ cấp</p>
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Được học cách đọc và viếtcủa các hán tự
                                sơ cấp</p>
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Nắm chắc các cấu trúc ngữ pháp cơ bản</p>
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Luyện tập nghe hiểu với phát âm của
                                người bản xứ</p>
                        </div>

                        <div class="col-md-6">
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Luyện tập các bài đọc hiểu liên quan đến
                                chủ đề
                            </p>
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Luyện tập giao tiếp trực tiếp với giáo
                                viên bản xứ</p>
                            <p><i class="fa-solid fa-check text-danger me-2"></i> Hệ thống các bài tập phong phú, đa dạng
                            </p>
                        </div>

                    </div>
                </div>

                <div class="course-detail mt-3">
                    <div class="fw-bold fs-5 mb-2">
                        <p>Nội dung khóa học</p>
                    </div>
                    <p>Gồn 25 bài học thuộc giáo trình Minano Nihongo</p>

                    <div class="row">
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 2</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 3</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 4</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 5</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 2</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 3</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 4</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 5</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 2</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 3</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 4</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 5</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 2</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 3</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 4</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 5</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 2</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 3</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 4</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-secondary-subtle shadow p-3 mb-3 bg-body-tertiary rounded text-center">
                                <p class="my-auto">Bài 5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Left -->



            <!-- Nav Right -->
            <div class="col text-center">
                <div class="embed-responsive embed-responsive-16by9 ratio ratio-21x9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- End Nav Right -->
        </div>
    </div>
@endsection
