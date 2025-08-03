<?php
require 'header.php';


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتب سند للخدمات العامة - النهائي</title>
    <!-- Links are the same -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>



    <main>
<!-- ========= قسم النبذة التعريفية (أبرز الخدمات) ========= -->
<!-- ========= قسم النبذة التعريفية (التصميم الجديد) ========= -->
<section class="intro-section">
    <div class="container">

        <!-- 1. العنوان يظهر على خلفية الصفحة مباشرة -->
        <h2 class="section-title">ابرز الخدمات</h2>

        <!-- 2. الصندوق الذي يحتوي على الفقرة فقط -->
        <div class="intro-text-box">
            <p class="intro-paragraph">
                مسيرتنا منذ عام 2021 نشأنا على ايادي سعودية نخدم ونتعاون على تطوير مجتمعنا تحت رؤية 2030 نتيح للمواطنين سهولة التقديم لما يحتاجه رواد الأعمال والشركات الكبرى ليكون سنداً لنجاح وتوفيق دائم.
            </p>
        </div>

    </div>
</section>```
<!-- ========= قسم الإحصائيات (تصميم الشريط الأفقي) ========= -->
<section class="stats-section-bar">
    <div class="container">
         <h2 class="section-title">ارقام تميزنا </h2>
        <div class="stats-bar-wrapper">
            <!-- الإحصائية الأولى -->
            <div class="stat-item">
                <div class="stat-number">10,000+</div>
                <p class="stat-label">خدمة سنوياً</p>
            </div>
            <!-- الإحصائية الثانية -->
            <div class="stat-item">
                <div class="stat-number">1,000+</div>
                <p class="stat-label">عميل شهرياً</p>
            </div>
            <!-- الإحصائية الثالثة -->
            <div class="stat-item">
                <div class="stat-number">99%</div>
                <p class="stat-label">رضا العملاء</p>
            </div>
        </div>
    </div>
</section>

        <!-- ✅ UPDATED: Elegant Static Grid -->
<section class="counters-section">
    <div class="container">
        <div class="counter-box">
            <div class="counter" data-target="1450">0</div>
            <p>عدد معاملات أبشر</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
        </div>
        <div class="counter-box">
            <div class="counter" data-target="980">0</div>
            <p>عدد معاملات ناجز</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
        </div>
        <div class="counter-box">
            <div class="counter" data-target="750">0</div>
            <p>عدد معاملات قوى</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></div>
        </div>
                <div class="counter-box">
            <div class="counter" data-target="50">0</div>
            <p>معاملات اخرى</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></div>
        </div>
    </div>
</section>


        <!-- Testimonial Slider is unchanged -->
        <section class="testimonial-section">
             <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"خدمة عملاء ممتازة..."</p><div class="author">- سارة الأحمدي</div></div></div>
                    <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"كانوا سنداً حقيقياً لنا..."</p><div class="author">- عبدالله القحطاني</div></div></div>
                    <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"فريق عمل متعاون ومتمكن..."</p><div class="author">- فاطمة الزهراني</div></div></div>
                    <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"من أفضل المكاتب التي تعاملت معها..."</p><div class="author">- محمد الغامدي</div></div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

    </main>

<?php require 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="assets/js/about.js"></script>
</body>
</html>