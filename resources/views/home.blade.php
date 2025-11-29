{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('title', 'صفحه اصلی')

@section('content')
    <div class="container">
        {{-- ==================== Hero Section (اسلاید شو) ==================== --}}
        <section class="hero-section">

            {{-- START: کد جدید برای منوی روی اسلایدر --}}
            <nav class="hero-nav">
                <ul>
                    <li><a href="#">دوره ها</a></li>
                    <li><a href="#">کتابخانه</a></li>
                    <li><a href="#">پادکست ها</a></li>
                    <li><a href="#">اخبار</a></li>

                </ul>
            </nav>
            {{-- END: کد جدید --}}

            <h1>اسلاید شو</h1>
            {{-- محتوای اسلایدر در اینجا قرار خواهد گرفت --}}
        </section>

        {{-- بقیه بخش‌های صفحه بدون تغییر باقی می‌مانند --}}
        {{-- ==================== Gallery Section ==================== --}}
        <section class="page-section">
            <h2 class="section-title">گالری تصاویر</h2>
            {{-- ... بقیه کد گالری ... --}}
        </section>

        {{-- ==================== Gallery Section (گالری تصاویر) ==================== --}}
        <section class="page-section">
            <h2 class="section-title">گالری تصاویر</h2>
            <div class="gallery">
                {{-- فراخوانی کامپوننت برای هر آیتم گالری --}}

                <x-gallery-item
                    imageUrl="https://via.placeholder.com/400x300/4CAF50/FFFFFF?text=Course+1"
                    title="عکس مربوط به دوره ۱"
                    link="#"
                />

                <x-gallery-item
                    imageUrl="https://via.placeholder.com/400x300/2196F3/FFFFFF?text=Course+2"
                    title="عکس مربوط به دوره ۲"
                    link="#"
                />

                <x-gallery-item
                    imageUrl="https://via.placeholder.com/400x300/FF9800/FFFFFF?text=Course+3"
                    title="عکس مربوط به دوره ۳"
                    link="#"
                />

                <x-gallery-item
                    imageUrl="https://via.placeholder.com/400x300/F44336/FFFFFF?text=Course+4"
                    title="عکس مربوط به دوره ۴"
                    link="#"
                />

            </div>
        </section>


        {{-- ==================== About Section (درمورد دوره) ==================== --}}
        <section class="page-section">
            {{-- عنوانی برای این بخش در طرح مشخص نشده بود، می‌توانیم اضافه کنیم --}}
            {{-- <h2 class="section-title">درباره دوره‌ها</h2> --}}
            <div class="card-grid">
                <div class="info-card">درمورد دوره</div>
                <div class="info-card">درمورد دوره</div>
                <div class="info-card">درمورد دوره</div>
                <div class="info-card">درمورد دوره</div>
            </div>
        </section>

        {{-- ==================== Popular Courses Section ==================== --}}
        <section class="page-section">
            <h2 class="section-title">دوره‌های پر مخاطب</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">52</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">23</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">366</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">22</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">66</div>
                    <div class="stat-label">تعداد دوره</div>
                </div>
            </div>
        </section>
    </div>
@endsection
