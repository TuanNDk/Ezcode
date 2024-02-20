<div>
    @php
        $categories = (new \Pv\BanKhoaHoc\Models\Category())->getCategoryForMenu();
        $courses = (new \Pv\BanKhoaHoc\Models\Course())->getAll();
    @endphp

    @foreach ($categories as $category)
        {{-- @dump($category); --}}
        @if ($category['status_id'] == 1)
            <div class="product-title text-uppercase mb-4">
                <a href="/category-show/{{ $category['id'] }}">
                    <h5 class="fw-bold">
                        {{ $category['name'] }}
                    </h5>
                </a>
            </div>

            <div class="row mb-4">
                @foreach ($courses as $course)
                    @if ($category['id'] == $course['c_category_id'] && $course['c_status_id'] == 1)
                        <div class="col">
                            <div class="mb-3">
                                <a href="/course/{{ $course['c_id'] }}">
                                    <img class="rounded" src="{{ $course['c_thumbnail'] }}" alt="" width="100%" ,
                                        height="150px">
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
            <hr>
        @endif
    @endforeach
</div>
