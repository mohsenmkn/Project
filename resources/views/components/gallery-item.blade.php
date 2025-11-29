@props([
    'imageUrl' => '#',          // یک مقدار پیش‌فرض برای آدرس تصویر
    'title' => 'عنوان پیش‌فرض', // یک مقدار پیش‌فرض برای عنوان
    'link' => '#'               // یک مقدار پیش‌فرض برای لینک
])

<div class="gallery-item">
    <a href="{{ $link }}" class="gallery-item-link">
        <div class="gallery-image">
            <img src="{{ $imageUrl }}" alt="{{ $title }}">
        </div>
        <div class="gallery-caption">
            <h3>title is:{{ $title }}</h3>
        </div>
    </a>
</div>
