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
        <h1 class="page-title">الأفراد</h1>
        <div class="jobs-grid">

            <!-- 1. حساب المواطن -->
            <div class="job-card">
                <img src="assets/images/حساب المواطن.png" alt="شعار حساب المواطن" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات حساب المواطن</h3>
                    <div class="card-buttons">
                        <button class="details-btn" 
                            data-title="خدمات برنامج حساب المواطن"
                            data-image="assets/images/حساب المواطن.png"
                            data-details="نساعدك في التسجيل وتحديث البيانات وإرفاق المستندات اللازمة لضمان استمرارية الدعم في برنامج حساب المواطن.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 2. الضمان الاجتماعي -->
            <div class="job-card">
                <img src="assets/images/الظمان الاجتماعي.png" alt="شعار الضمان الاجتماعي" class="card-image">
                <div class="card-overlay">
                    <h3>الضمان الاجتماعي المطور</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات الضمان الاجتماعي المطور"
                            data-image="assets/images/الظمان الاجتماعي.png"
                            data-details="نقوم بالتسجيل في نظام الضمان الاجتماعي المطور ومتابعة الطلبات وتقديم الاعتراضات لضمان حصولكم على الدعم المستحق.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 3. تمهير -->
<div class="job-card">
    <img src="assets/images/هدف.png" alt="شعار صندوق هدف" class="card-image">
    <div class="card-overlay">
        <h3>التسجيل في هدف</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات صندوق تنمية الموارد البشرية (هدف)"
                data-image="assets/images/هدف.png"
                data-details="نقدّم خدمة التسجيل في بوابة صندوق تنمية الموارد البشرية (هدف)، والتي تتيح للباحثين عن عمل والجهات المستفيدة الوصول إلى برامج دعم التوظيف، التدريب، التأهيل، وتمكين الكوادر الوطنية في سوق العمل.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>


<!-- 4. ناجز -->
<div class="job-card">
    <img src="assets/images/ناجز.png" alt="شعار منصة ناجز" class="card-image">
    <div class="card-overlay">
        <h3>خدمات ناجز</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات منصة ناجز العدلية"
                data-image="assets/images/ناجز.png"
                data-details="نقدم جميع الخدمات الإلكترونية المتاحة عبر منصة ناجز التابعة لوزارة العدل، مثل إصدار الوكالات، توثيق العقود، تقديم الطلبات، متابعة القضايا، إثبات الطلاق والزواج، والاستعلام عن المعاملات العدلية وغيرها.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>


            <!-- 5. دعم التأهيل الشامل -->
            <div class="job-card">
                <img src="assets/images/دعم التاهيل الشامل.png" alt="شعار التأهيل الشامل" class="card-image">
                <div class="card-overlay">
                    <h3>دعم التأهيل الشامل</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات دعم التأهيل الشامل"
                            data-image="assets/images/دعم التاهيل الشامل.png"
                            data-details="التسجيل وتحديث البيانات للمستفيدين من برامج دعم ذوي الإعاقة (التأهيل الشامل) لضمان استلام الإعانات المالية.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

            <!-- 6. دعم المواشي -->
<!-- 6. مكتب العمل -->
<div class="job-card">
    <img src="assets/images/work.png" alt="شعار مكتب العمل" class="card-image">
    <div class="card-overlay">
        <h3>خدمات مكتب العمل</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات مكتب العمل للمنشآت والأفراد"
                data-image="assets/images/work.png"
                data-details="نقدم خدمات مكتب العمل مثل فتح ملف منشأة، تعديل بيانات المنشآت، نقل الكفالة، إصدار التأشيرات، تحديث بيانات العاملين، تقديم الشكاوى، والاستعلام عن المخالفات وغيرها.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>


            <!-- 7. بنك التنمية -->
            <div class="job-card">
                <img src="assets/images/بنك التنمية.png" alt="شعار بنك التنمية الاجتماعية" class="card-image">
                <div class="card-overlay">
                    <h3>بنك التنمية الاجتماعية</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات بنك التنمية الاجتماعية"
                            data-image="assets/images/بنك التنمية.png"
                            data-details="نقدم المساعدة في التقديم على منتجات التمويل المختلفة من بنك التنمية الاجتماعية (تمويل الأسرة، الزواج، الترميم).">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

<!-- 8. صندوق التنمية العقاري -->
<div class="job-card">
    <img src="assets/images/real estate.png" alt="شعار صندوق التنمية العقاري" class="card-image">
    <div class="card-overlay">
        <h3>صندوق التنمية العقاري</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات صندوق التنمية العقاري"
                data-image="assets/images/real estate.png"
                data-details="تقديم الدعم في التقديم على برامج صندوق التنمية العقاري، مثل القرض المدعوم وتحويل التمويل القائم، ومتابعة الطلب حتى مرحلة الاعتماد.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>
<!-- 9. البورصة العقارية -->
<div class="job-card">
    <img src="assets/images/market.png" alt="شعار البورصة العقارية" class="card-image">
    <div class="card-overlay">
        <h3>البورصة العقارية</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات البورصة العقارية"
                data-image="assets/images/market.png"
                data-details="خدمة التسجيل في البورصة العقارية، رفع الصكوك والوثائق العقارية، وإرشاد العملاء في خطوات التوثيق الإلكتروني للصفقات العقارية.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>


<!-- 10. التأمينات الاجتماعية -->
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

            
            <!-- 11. مطالبات مركبات -->
            <div class="job-card">
                <img src="assets/images/مركبات.png" alt="أيقونة مطالبات المركبات" class="card-image">
                <div class="card-overlay">
                    <h3>مطالبات المركبات</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="رفع مطالبات حوادث المركبات"
                            data-image="assets/images/مركبات.png"
                            data-details="نقوم برفع ومتابعة مطالبات حوادث المركبات لدى شركات التأمين (نجم) لضمان الحصول على التعويض.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>

<!-- 12. استرجاع التأمين (عاملة أو سيارة) -->
<div class="job-card">
    <img src="assets/images/homeworker.png" alt="أيقونة استرجاع التأمين" class="card-image">
    <div class="card-overlay">
        <h3>استرجاع التأمين</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="استرجاع التأمين (عاملة أو سيارة)"
                data-image="assets/images/homeworker.png"
                data-details="مساعدتك في تقديم طلب استرجاع مبلغ التأمين سواء للعمالة المنزلية أو المركبات من الشركات المعتمدة.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>
         <!-- 4. العمل الحر (وثيقة العمل الحر) -->
            <div class="job-card">
                <img src="assets/images/العمل الحر.png" alt="شعار وثيقة العمل الحر" class="card-image">
                <div class="card-overlay">
                    <h3>إصدار وثيقة العمل الحر</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="إصدار وتجديد وثيقة العمل الحر"
                            data-image="assets/images/العمل الحر.png"
                            data-details="مساعدتك في استخراج أو تجديد وثيقة العمل الحر للممارسين المستقلين للاستفادة من المزايا والحلول التمويلية.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>
            
            <!-- 13. أبشر أفراد -->
            <div class="job-card">
                <img src="assets/images/ابشر افراد.png" alt="شعار أبشر أفراد" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات أبشر أفراد</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="جميع خدمات منصة أبشر أفراد"
                            data-image="assets/images/ابشر افراد.png"
                            data-details="إنجاز كافة خدمات منصة أبشر أفراد: تجديد الهوية، إصدار جواز السفر، خدمات المرور، وغيرها الكثير.">
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