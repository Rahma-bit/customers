<?php 
require 'header.php'
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوظائف - مكتب سند للخدمات العامة</title>
    
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="style.css">
    
     
    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/emp.css">
</head>
<body>
    <?php 
        // استبدل هذا الرقم برقم الواتساب الخاص بك بالصيغة الدولية بدون +
        $whatsapp_number = "966500000000"; 
    ?>

    <!-- ======================= -->
    <!--       MAIN CONTENT      -->
    <!-- ======================= -->
<main class="main-content">
    <div class="container">
        <h1 class="page-title">الخدمات الطلابية</h1>
        <div class="jobs-grid">

            <!-- البطاقة الأولى: سيرة ذاتية -->
            <div class="job-card">
                <img src="assets/images/cv.png" alt="خدمة تصميم سيرة ذاتية" class="card-image">
                <div class="card-overlay">
                    <h3>سيرة ذاتية</h3>
                    <div class="card-buttons">
                        <button class="details-btn" 
                            data-title="تصميم سيرة ذاتية احترافية"
                            data-image="assets/images/cv.png"  
                            data-details="نصمم لك سيرة ذاتية احترافية (عربي/إنجليزي) بتصاميم عصرية وجذابة تبرز مهاراتك وخبراتك لتزيد من فرص قبولك الوظيفي.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الثانية: عروض تقديمية -->
            <div class="job-card">
                <img src="assets/images/عروض تقديمية.png" alt="خدمة تصميم عروض تقديمية" class="card-image">
                <div class="card-overlay">
                    <h3>عروض تقديمية</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="تصميم عروض تقديمية (PowerPoint)"
                            data-image="assets/images/عروض تقديمية.png"
                            data-details="نصمم عروضًا تقديمية مميزة واحترافية لمشاريعك الجامعية ومناقشات التخرج، مع التركيز على تنظيم المحتوى والتصميم الجذاب.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الثالثة: تقارير تخرج -->
            <div class="job-card">
                <img src="assets/images/report.png" alt="خدمة إعداد تقارير تخرج" class="card-image">
                <div class="card-overlay">
                    <h3>تقارير تخرج</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="إعداد وكتابة تقارير التخرج"
                            data-image="assets/images/report.png"
                            data-details="مساعدة في إعداد وتنسيق تقارير وأبحاث التخرج وفق المعايير الأكاديمية المطلوبة، مع ضمان التدقيق اللغوي والتنسيق الاحترافي.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الرابعة: تصميم شهادات -->
            <div class="job-card">
                <img src="assets/images/Certificate Design.jpg" alt="خدمة تصميم شهادات" class="card-image">
                <div class="card-overlay">
                    <h3>تصميم شهادات</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="تصميم شهادات شكر وتقدير ودورات"
                            data-image="assets/images/Certificate Design.jpg"
                            data-details="نصمم شهادات مخصصة للمناسبات والدورات التدريبية وورش العمل بتصاميم أنيقة ورسمية قابلة للطباعة.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>
            
            <!-- البطاقة الخامسة: خرائط ذهنية -->
            <div class="job-card">
                <img src="assets/images/خرائط ذهنية.png" alt="خدمة تصميم خرائط ذهنية" class="card-image">
                <div class="card-overlay">
                    <h3>خرائط ذهنية</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="إنشاء خرائط ذهنية"
                            data-image="assets/images/خرائط ذهنية.png"
                            data-details="نساعدك على تلخيص المواد والمفاهيم المعقدة في خرائط ذهنية سهلة الفهم والمراجعة، مما يعزز قدرتك على الحفظ والدراسة.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>
            
            <!-- البطاقة السادسة: بحوث -->
            <div class="job-card">
                <img src="assets/images/بحوث.png" alt="خدمة إعداد بحوث" class="card-image">
                <div class="card-overlay">
                    <h3>بحوث</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="مساعدة في إعداد البحوث"
                            data-image="assets/images/بحوث.png"
                            data-details="نقدم المساعدة في إعداد البحوث الطلابية في مختلف التخصصات، من البحث عن المصادر إلى الكتابة والتنسيق النهائي.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>
            
            <!-- البطاقة السابعة: دعوات الكترونية -->
            <div class="job-card">
                <img src="assets/images/invate.png" alt="خدمة تصميم دعوات الكترونية" class="card-image">
                <div class="card-overlay">
                    <h3>دعوات الكترونية</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="تصميم دعوات إلكترونية للمناسبات"
                            data-image="assets/images/invate.png"
                            data-details="نصمم دعوات إلكترونية أنيقة (صور أو فيديو) لمناسباتكم الخاصة مثل حفلات التخرج والمناقشات وغيرها.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>
            
            <!-- البطاقة الثامنة: اوراق عمل -->
            <div class="job-card">
                <img src="assets/images/paper.jpg" alt="خدمة تصميم أوراق عمل" class="card-image">
                <div class="card-overlay">
                    <h3>اوراق عمل</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="إعداد وتصميم أوراق عمل"
                            data-image="assets/images/paper.jpg"
                            data-details="نقوم بتصميم وإعداد أوراق عمل تفاعلية ومنظمة للمواد الدراسية المختلفة لمساعدتك في التمارين والمراجعة.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة التاسعة: تسجيل قياس -->
            <div class="job-card">
                <img src="assets/images/تسجيل قياس.png" alt="خدمة التسجيل في قياس" class="card-image">
                <div class="card-overlay">
                    <h3>تسجيل قياس</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="المساعدة في التسجيل باختبارات قياس"
                            data-image="assets/images/تسجيل قياس.png"
                            data-details="نساعدك في عملية التسجيل في اختبارات المركز الوطني للقياس (القدرات، التحصيلي، الرخصة المهنية) بكل سهولة ويسر.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<!-- ======================= -->
<!--     النافذة المنبثقة     -->
<!-- ======================= -->
<div id="detailsModal" class="modal">
    <div class="modal-content">
        <span class="modal-close-btn">×</span>
        <img id="modalImage" src="" alt="تفاصيل الخدمة" class="modal-image">
        <h2 id="modalTitle"></h2>
        <p id="modalDetails"></p>
        <a id="modalCtaBtn" href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة الآن</a>
    </div>
</div>

<!-- 
    ===============================================================
      هنا نضع الجافا سكربت الخاص بالصفحة الحالية فقط 
    ===============================================================
-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('detailsModal');
        const modalCloseBtn = document.querySelector('.modal-close-btn');
        const detailsBtns = document.querySelectorAll('.details-btn');

        detailsBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const title = this.dataset.title;
                const image = this.dataset.image;
                const details = this.dataset.details;

                document.getElementById('modalTitle').textContent = title;
                document.getElementById('modalImage').src = image;
                document.getElementById('modalDetails').textContent = details;

                modal.style.display = 'flex';
            });
        });

        function closeModal() {
            modal.style.display = 'none';
        }

        modalCloseBtn.addEventListener('click', closeModal);

        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    });
</script>


<?php 
    // الخطوة الأخيرة: استدعاء الفوتر الذي يغلق الصفحة
    require 'footer.php';
?>