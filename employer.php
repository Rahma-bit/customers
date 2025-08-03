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
        $whatsapp_number = "+9660558071211"; 
    ?>

<!-- ======================= -->
<!--      قسم الوظائف       -->
<!-- ======================= -->
<main class="main-content">
    <div class="container">
        <h1 class="page-title">الوظائف</h1>
        <div class="jobs-grid">

            <!-- البطاقة الأولى: خدمات جدارات -->
            <div class="job-card">
                <!-- ** تأكد من وجود الصورة بهذا الاسم ** -->
                <img src="assets/images/جدارات.png" alt="خدمات منصة جدارات" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات جدارات</h3>
                    <div class="card-buttons">
                        <button class="details-btn" 
                            data-title="خدمات منصة جدارات"
                            data-image="assets/images/جدارات.png"  
                            data-details="نساعدك في التسجيل وتحديث ملفك في المنصة الوطنية الموحدة للتوظيف (جدارات)، وتقديم طلبات التوظيف ومتابعتها لزيادة فرصك في الحصول على وظيفة حكومية.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الثانية: خدمات طاقات -->
            <div class="job-card">
                <!-- ** تأكد من وجود الصورة بهذا الاسم ** -->
                <img src="assets/images/طاقات.png" alt="خدمات منصة طاقات" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات طاقات</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة طاقات"
                            data-image="assets/images/طاقات.png"
                            data-details="نقدم الدعم الكامل للتسجيل في برامج البوابة الوطنية للعمل (طاقات)، والاستفادة من برامج دعم التوظيف والتدريب مثل (تمهير) وغيرها.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الثالثة: Linkedin -->
            <div class="job-card">
                <!-- ** تأكد من وجود الصورة بهذا الاسم ** -->
                <img src="assets/images/Linkedin.png" alt="خدمات Linkedin" class="card-image">
                <div class="card-overlay">
                    <h3>Linkedin</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="إنشاء وتطوير حساب LinkedIn"
                            data-image="assets/images/Linkedin.png"
                            data-details="نقوم بإنشاء وتطوير صفحتك الشخصية على LinkedIn بشكل احترافي، وإبراز مهاراتك وخبراتك لجذب انتباه مسؤولي التوظيف والشركات.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>

            <!-- البطاقة الرابعة: خدمات العمل عن بعد -->
            <div class="job-card">
                <!-- ** تأكد من وجود الصورة بهذا الاسم ** -->
                <img src="assets/images/العمل عن بعد.png" alt="خدمات العمل عن بعد" class="card-image">
                <div class="card-overlay">
                    <h3>العمل عن بعد</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة العمل عن بعد"
                            data-image="assets/images/العمل عن بعد.png"
                            data-details="مساعدتك في التسجيل بمنصة العمل عن بعد، وتجهيز ملفك للتقديم على الوظائف المرنة التي تناسب مهاراتك وظروفك.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">اطلب الآن</a>
                    </div>
                </div>
            </div>
            
            <!-- البطاقة الخامسة: خدمات الوظائف الحكومية -->
            <div class="job-card">
                <!-- ** تأكد من وجود الصورة بهذا الاسم ** -->
                <img src="assets/images/الوظائف الحكومية.png" alt="خدمات الوظائف الحكومية" class="card-image">
                <div class="card-overlay">
                    <h3>الوظائف الحكومية</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="التقديم على الوظائف الحكومية"
                            data-image="assets/images/الوظائف الحكومية.png"
                            data-details="نتابع إعلانات الوظائف الحكومية ونقوم بالتقديم نيابة عنك على المنصات المختلفة بعد استيفاء الشروط، لضمان عدم تفويت أي فرصة وظيفية.">
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