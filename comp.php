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
        $whatsapp_number = "+966504341020"; 
    ?>

    <!-- ======================= -->
    <!--       MAIN CONTENT      -->
    <!-- ======================= -->
 <main class="main-content">
    <div class="container">
        <h1 class="page-title">المؤسسات</h1>
        <div class="jobs-grid">

            <!-- 1. معروف -->
            <div class="job-card">
                <img src="assets/images/معروف.png" alt="شعار معروف" class="card-image fit-image">
                <div class="card-overlay">
                    <h3>التسجيل في معروف</h3>
                    <div class="card-buttons">
                        <button class="details-btn" 
                            data-title="التسجيل في منصة معروف"
                            data-image="assets/images/معروف.png"
                            data-details="نساعدك في تسجيل وتوثيق متجرك أو منشأتك في منصة معروف لزيادة الثقة والمصداقية لدى عملائك.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 2. سلة -->
            <div class="job-card">
                <img src="assets/images/سلة.png" alt="شعار سلة" class="card-image fit-image">
                <div class="card-overlay">
                    <h3>تصميم متجر سلة</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="تصميم وتجهيز المتاجر على سلة"
                            data-image="assets/images/سلة.png"
                            data-details="نقدم خدمة متكاملة لتصميم وتفعيل وتخصيص متجرك على منصة سلة، بما في ذلك تصميم الهوية البصرية، إضافة المنتجات، وربط بوابات الدفع والشحن.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 3. المركز السعودي للاعمال الحرة -->
            <div class="job-card">
                <img src="assets/images/المركز السعودي للاعمال الحرة.png" alt="شعار المركز السعودي للاعمال الحرة" class="card-image">
                <div class="card-overlay">
                    <h3>المركز السعودي للأعمال</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات المركز السعودي للأعمال"
                            data-image="assets/images/المركز السعودي للاعمال الحرة.png"
                            data-details="نقدم المساعدة في إنجاز كافة الخدمات المقدمة عبر المركز السعودي للأعمال الاقتصادية لتسهيل بدء وممارسة أعمالك.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>
<div class="job-card">
    <img src="assets/images/tamen.png" alt="شعار التأمينات الاجتماعية" class="card-image">
    <div class="card-overlay">
        <h3>التأمينات الاجتماعية</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات التأمينات الاجتماعية"
                data-image="assets/images/tamen.png"
                data-details="تقديم الدعم في تسجيل الموظفين والمنشآت، متابعة الاشتراكات، تعديل بيانات المشتركين، وطباعة الشهادات إلكترونيًا.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>
   

            <!-- 5. فتح حساب بنكي -->
            <div class="job-card">
                <img src="assets/images/al rajhi.png" alt="أيقونة فتح حساب بنكي تجاري" class="card-image">
                <div class="card-overlay">
                    <h3>فتح حساب بنكي تجاري</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="فتح حساب بنكي للمؤسسات"
                            data-image="assets/images/al rajhi.png"
                            data-details="نساعدك في تجهيز المستندات والمتطلبات اللازمة لفتح حساب بنكي تجاري لمنشأتك لدى البنوك المحلية.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 6. أبشر أعمال -->
            <div class="job-card">
                <img src="assets/images/ابشر اعمال.png" alt="شعار أبشر أعمال" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات أبشر أعمال</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة أبشر أعمال"
                            data-image="assets/images/ابشر اعمال.png"
                            data-details="إنجاز كافة خدمات منصة أبشر أعمال، بما في ذلك إدارة الموظفين، خدمات المركبات، والتفاويض الإلكترونية.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 7. خدمات ناجز أعمال -->
            <div class="job-card">
                <img src="assets/images/وزارة العدل.png" alt="شعار ناجز أعمال" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات ناجز أعمال</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة ناجز أعمال"
                            data-image="assets/images/وزارة العدل.png"
                            data-details="متابعة وإنجاز كافة الخدمات القضائية لمنشأتك عبر بوابة ناجز أعمال، بما في ذلك الوكالات والعقود.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 8. قوى -->
            <div class="job-card">
                <img src="assets/images/قوى.png" alt="شعار منصة قوى" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات منصة قوى</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة قوى"
                            data-image="assets/images/قوى.png"
                            data-details="إدارة كافة خدمات الموظفين والمنشأة عبر منصة قوى، بما في ذلك نقل الخدمات، تغيير المهنة، وإصدار التأشيرات.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 9. وزارة التجارة -->
            <div class="job-card">
                <img src="assets/images/وزارة التجارة.png" alt="شعار وزارة التجارة" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات وزارة التجارة</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات وزارة التجارة"
                            data-image="assets/images/وزارة التجارة.png"
                            data-details="إصدار وتجديد السجلات التجارية، حجز الأسماء التجارية، وتعديل بيانات المنشأة لدى وزارة التجارة.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
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