{{-- resources/views/layouts/app.blade.php --}}

    <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'وبسایت آموزشی')</title>

    {{-- افزودن یک فونت فارسی مناسب (اختیاری اما پیشنهادی) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
</head>
<body>

{{-- ==================== Header (بر اساس طرح جدید) ==================== --}}
<header class="main-header">
    <div class="header-content">
        <div class="logo">LOGO</div>
        <nav class="main-nav">
            <ul>
                <li><a href="#">خانه</a></li>
                <li><a href="#">دوره‌ها</a></li>
                <li><a href="#">کتابخانه</a></li>
                <li><a href="#">پادکست</a></li>
                <li><a href="#">اخبار</a></li>
            </ul>
        </nav>

        {{-- START: دکمه منوی همبرگری --}}
        <button class="mobile-nav-toggle" aria-controls="main-nav" aria-expanded="false">
            <span class="sr-only">Menu</span>
            ☰
        </button>
        {{-- END: دکمه --}}

        <div class="auth-buttons">
            <a href="#" class="btn btn-login">ورود</a>
        </div>
    </div>
</header>

<main>
    {{-- محتوای اصلی و منحصر به فرد هر صفحه در اینجا قرار می‌گیرد --}}
    @yield('content')
</main>

{{-- ==================== Footer (بر اساس طرح جدید) ==================== --}}
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column footer-about">
                <h3 class="logo">LOGO</h3>
                <p class="footer-description">
                    نوشته: اتناناتناناتناناناتنان اتناتناتنتاناتناناتناتناتناناناتنات اتناناتناتناناناناناتناتناان
                </p>
            </div>
            <div class="footer-column footer-links">
                <h4>دوره‌ها</h4>
                <ul>
                    <li><a href="#">لینک دوره ۱</a></li>
                    <li><a href="#">لینک دوره ۲</a></li>
                    <li><a href="#">لینک دوره ۳</a></li>
                    <li><a href="#">لینک دوره ۴</a></li>
                </ul>
            </div>
            <div class="footer-column footer-contact">
                <h4>ارتباط با ما</h4>
                <p>تلفن: 345114</p>
                <p>ایمیل: EDU@GTTMCO.IR</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>تمامیه حقوق محفوض است.</p>
        </div>
    </div>
</footer>

</body>
</html>
