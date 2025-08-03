<?php 
require 'header.php'
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتب سند للخدمات العامة | نُسهّل الإجراءات</title>
    <meta name="description" content="مكتب سند للخدمات العامة يقدم حلولاً متكاملة لإنجاز المعاملات الحكومية والخاصة بسرعة وكفاءة للأفراد والشركات في المملكة العربية السعودية.">
    
    <!-- Google Fonts & Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    
    <!-- Main CSS file -->
    <link rel="stylesheet" href="assets/css/mainpage.css">

</head>
<body>

   <main>
    <!-- Hero Section (لا يحتاج للتأثير لأنه أول ما يظهر) -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-overlay-box">
                <h1>نُسهّل الإجراءات... ونختصر عليك الطريق</h1>
                <h2>مكتب سند للخدمات العامة</h2>
                <p>
                    يقدم مكتب سند حلولاً متكاملة لإنجاز المعاملات الحكومية والخاصة بسرعة وكفاءة.
                    نهدف إلى تسهيل الإجراءات على الأفراد والشركات، مع الالتزام بالشفافية والدقة في كل خطوة.
                </p>
                <a href="#services" class="cta-button">تصفح الخدمات</a>
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section id="about" class="about-section reveal-on-scroll">
        <div class="container">
            <h2 class="section-title">وثائقنا الرسمية</h2>
            <div class="credentials-container">
                <a href="#" class="credential-box" data-tooltip="انقر لعرض الصورة" data-image-src="assets/images/commercial register.jpeg">
                    <span>السجل التجاري</span>
                </a>
                <a href="#" class="credential-box" data-tooltip="انقر لعرض الصورة" data-image-src="assets/images/maroof-certificate.png">
                    <span>شهادة معروف</span>
                </a>
            </div>
        </div>
    </section>
    
    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section id="services" class="services-section reveal-on-scroll">
        <div class="container">
            <h2 class="section-title">خدماتنا</h2>
            <div class="services-container">
                <div class="service-card">
                    <i class="fas fa-briefcase"></i>
                    <h3>خدمات المؤسسات والشركات</h3>
                    <p>ندعم قطاع الأعمال بتوفير خدمات احترافية تساعد الشركات ورواد الأعمال على التركيز في نمو أعمالهم.</p>
                    <ul>
                        <li>تأسيس السجلات التجارية وتوثيق العقود</li>
                        <li>استخراج التراخيص البلدية والصناعية</li>
                        <li>خدمات التأمينات الاجتماعية وملف مكتب العمل</li>
                    </ul>
                    <a href="comp.php" class="cta-button secondary">عرض كل الخدمات</a>
                </div>
                <div class="service-card">
                    <i class="fas fa-user"></i>
                    <h3>خدمات الأفراد</h3>
                    <p>نقدّم للأفراد حلولًا سريعة وميسّرة لإنجاز معاملاتهم الحكومية والخاصة بما يوفّر عليهم الوقت والجهد.</p>
                    <ul>
                        <li>حجز المواعيد الحكومية (أبشر، الجوازات، المرور)</li>
                        <li>البورصة العقارية / تحديث صك</li>
                        <li>منصة ناجز / رفع دعوة ، تنفيذ ، وكالات</li>
                    </ul>
                    <a href="individuals.php" class="cta-button secondary">عرض كل الخدمات</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section class="pillars-section reveal-on-scroll">
        <div class="container">
            <h2 class="section-title">ركائز نجاحنا</h2>
            <div class="pillars-container">
                <div class="pillar-box">
                    <i class="fas fa-stopwatch"></i>
                    <h3>سرعة الخدمة والإنجاز</h3>
                </div>
                <div class="pillar-box">
                    <i class="fas fa-handshake"></i>
                    <h3>تقديم الخدمات للأفراد والمؤسسات</h3>
                </div>
                <div class="pillar-box">
                    <i class="fas fa-users"></i>
                    <h3>طاقم سعودي 100%</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section class="counters-section reveal-on-scroll">
         <h2 class="section-title">إنجازات نفتخر بها</h2>
        <div class="container counter-grid">
            <div class="counter-box">
                <div class="counter" data-target="2000">0</div>
                <p>عدد معاملات أبشر</p>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
            </div>
            <div class="counter-box">
                <div class="counter" data-target="1500">0</div>
                <p>عدد معاملات ناجز</p>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
            </div>
            <div class="counter-box">
                <div class="counter" data-target="750">0</div>
                <p>عدد معاملات قوى</p>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></div>
            </div>
            <div class="counter-box">
                <div class="counter" data-target="7000">0</div>
                <p>معاملات اخرى</p>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></div>
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section class="testimonial-section reveal-on-scroll">
        <h2 class="section-title">آراء عملائنا</h2>
         <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"مكتب متعاون ع فعل نجاح وتميز وبتكار وخدمات متنوعه أنا اشكر كل شخص ناجح ع هذا التميز الراقي والعمل المتنوع 👌🧡
أنا تجربتي في فعل منيو ع فتح صالون
وكانت تجربه مميزه جدا ع فعل ابتكار
وفعل حلول خطيره توصلك الي النجاح
دايم والله والله مكتب مميز ومحل الثقه
أنا انصح كل شخص موظف في هذا المكتب
أنكم اقويا وابطال وصاحب المكتب نشكرك ع هذا التطور الجميل 🧡🧡🧡🧡🧡."</p><div class="author">- زياد الشيخ</div></div></div>
                <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"مكتب متكامل وخدمات متميزة واخص بالشكر الاستاذة عائشة أحمد قمة ف الادب والأخلاق وسرعة الانجاز وماشاء الله تبارك الله فاهمة في أمور كثيرة ومكسب كبير للمكتب الله يوفقها."</p><div class="author">- مستور الحارثي</div></div></div>
                <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"مكتب خدماته في منتهى الرقي وتعامل الموظفين على أرقى مستوى ينجز المعاملة ويتابعها معك الى إكمالها والانتهاء منها يستاهل أكثر من خمس نجوم."</p><div class="author">- Fahad Al otaibi</div></div></div>
                <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"افضل مكتب خدمات سند تعاملت معه وأنصح اللي عنده معامله ويبي ينتهي منها لا يطوفه هالمكتب سريعين في إنجاز المعاملات وأيضا في الاستجابة طاقم محترف اهني هذا الطاقم المتميز والإختيار المتميز من الموظفين وشكر خاص للموظفة مريم علي صبرها ومتابعتها حتي نهاية انتهاء المعاملة أن شاء الله إلي الاعلي في تميز وفقكم الله.."</p><div class="author">- سعد الضويحي</div></div></div>
                 <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"مكتب متكامل وخدمات متميزة واخص بالشكر الاستاذة عائشة أحمد قمة ف الادب والأخلاق وسرعة الانجاز وماشاء الله تبارك الله فاهمة في أمور كثيرة ومكسب كبير للمكتب الله يوفقها."</p><div class="author">- مستور الحارثي</div></div></div>
                  <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"مشاء الله المكان مرتب و خدمات مره ممتازه الله يوفقهم ."</p><div class="author">- يوسف اابل</div></div></div>
                   <div class="swiper-slide"><div class="testimonial-card"><p class="quote">"  خدمة الاستاذه عايشه ملفته للنظر واخلاقها اكثر من رائعه .. وكذلك عودونا مكتب سند مع موظفيهم .. جزاهم الله خير
."</p><div class="author">- بوعبدالرحمن نايف</div></div></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section class="mission-section reveal-on-scroll">
        <div class="container mission-wrapper">
            <div class="mission-text">
                <h2 class="section-title">غايتنا</h2>
                <p>
                    أن تكون كل خدمة تجربة سهلة ومريحة ويشعر كل عميل بالثقة وكل ما يحتاجه سيتم بدقة وبدون تعقيد ونحرص على أن يكون تواصلكم معنا بداية لثقة تدوم. لا نكتفي بإنهاء المعاملة ; بل نهتم بتجربة العميل من أول لحظة حتى آخر لقاء.
                </p>
            </div>
            <div class="mission-image">
                <img src="assets/images/غايتنا.png" alt="غايتنا في مكتب سند">
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section class="social-section reveal-on-scroll">
        <div class="container social-wrapper">
            <h2 class="section-title">تواصل معنا</h2>
            <div class="social-icons">
                <a href="https://wa.me/+966558071211" target="_blank" class="social-icon whatsapp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/sanad_services10/?igsh=MXF6eGo0a2lhdmtkdQ%3D%3D&utm_source=qr#" target="_blank" class="social-icon instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.snapchat.com/add/sanadoffice2030?sender_web_id=cfc18858-2b43-4304-a1e1-01f1060df7f6&device_type=desktop&is_copy_url=true" target="_blank" class="social-icon snapchat" title="Snapchat"><i class="fab fa-snapchat"></i></a>
                <a href="https://www.tiktok.com/@sanad_services1?is_from_webapp=1&sender_device=pc" target="_blank" class="social-icon tiktok" title="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </section>

    <!-- ✅ تم التعديل هنا: إضافة كلاس التأثير -->
    <section id="contact" class="contact-section reveal-on-scroll">
        <div class="container">
            <div class="contact-details">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.617811356007!2d49.55695722420837!3d25.384122424103317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e37979e1eea50a1%3A0x5b812c2fef8575fc!2z2YXZg9iq2Kgg2LPZhtivINmE2YTYrtiv2YXYp9iqINin2YTYudin2YXYqQ!5e0!3m2!1sar!2ssa!4v1754133112773!5m2!1sar!2ssa" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="contact-info">
                    <h3>موقعنا</h3>
                    <p>لزيارتنا مباشرة أو للحصول على مزيد من التفاصيل يمكنكم التوجه إلى العنوان التالي:</p>
                    <p><strong>شارع:</strong> الامير سعود بن عبد العزيز</p>
                    <p><strong>حي:</strong> عين نجم، المبرز</p>
                    <hr>
                    <p>لأي استفسار لا تتردد في الاتصال بنا على الأرقام التالية:</p>
                    <p><strong>للأفراد:</strong> <a href="tel:+966558071211">0558071211</a> - <a href="tel:+966501780270">0501780270</a></p>
                    <p><strong>للأعمال:</strong> <a href="tel:+966504341020">0504341020</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Modal for Credentials -->
    <div id="imageModal" class="modal">
      <span class="close-modal">×</span>
      <img class="modal-content" id="modalImage">
    </div>

    <?php 
        require 'footer.php';
    ?>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {

    // --- 1. إعداد Swiper لآراء العملاء ---
    try {
        const testimonialSwiper = new Swiper('.testimonial-slider', {
            loop: true,
            // ✅ السطر الجديد الذي تم إضافته هنا
            centeredSlides: true,
            
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            grabCursor: true,
            slidesPerView: 1, // العرض الأساسي للجوال
            spaceBetween: 20,
            
            // تحديد عدد الشرائح حسب حجم الشاشة
            breakpoints: {
                768: {
                    slidesPerView: 2, // لشاشات التابلت
                },
                1024: {
                    slidesPerView: 3, // للشاشات الكبيرة
                }
            }
        });
    } catch (e) {
        console.log("Swiper slider not found or failed to initialize.");
    }

    // --- 2. إعداد Modal (النافذة المنبثقة) للوثائق (لا تغيير هنا) ---
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    const credentialBoxes = document.querySelectorAll('.credential-box');
    const closeModal = document.querySelector(".close-modal");

    if (modal) {
        credentialBoxes.forEach(box => {
            box.addEventListener('click', function (e) {
                e.preventDefault();
                const imgSrc = this.getAttribute('data-image-src');
                modal.style.display = "block";
                modalImg.src = imgSrc;
            });
        });

        closeModal.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
    
    // --- 3. كود تأثير الظهور عند التمرير (لا تغيير هنا) ---
    const animatedElements = document.querySelectorAll('.reveal-on-scroll, .counter');

    if (animatedElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    if (entry.target.classList.contains('counter') && !entry.target.classList.contains('animated')) {
                        entry.target.classList.add('animated');
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target');
                        let current = 0;
                        const increment = target / 200;
                        const updateCounter = () => {
                            if (current < target) {
                                current += increment;
                                counter.innerText = Math.ceil(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCounter();
                    }
                } else {
                    entry.target.classList.remove('is-visible');
                    if (entry.target.classList.contains('counter')) {
                        entry.target.classList.remove('animated');
                        entry.target.innerText = '0';
                    }
                }
            });
        }, {
            threshold: 0.15
        });

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    }
});
    </script>

</body>
</html>