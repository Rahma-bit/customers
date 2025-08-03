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
<!-- ======================= -->
<!--      بطاقة مدد         -->
<!-- ======================= -->
<div class="job-card">
    <img src="assets/images/mudad.png" alt="شعار منصة مدد" class="card-image">
    <div class="card-overlay">
        <h3>خدمات منصة مدد</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات مدد لحماية الأجور وتوثيق العقود"
                data-image="assets/images/mudad.png"
                data-details="نوفر خدمات منصة مدد لتسهيل إدارة الرواتب وحماية الأجور، توثيق العقود إلكترونياً، رفع ملفات مسيرات الرواتب، وإدارة بيانات الموظفين والاشتراكات.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>

<!-- ======================= -->
<!--      بطاقة بلدي        -->
<!-- ======================= -->
<div class="job-card">
    <img src="assets/images/balady.png" alt="شعار منصة بلدي" class="card-image">
    <div class="card-overlay">
        <h3>خدمات منصة بلدي</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات بلدي للرخص التجارية والبلدية"
                data-image="assets/images/balady.png"
                data-details="نساعدك في كافة خدمات منصة بلدي، من إصدار وتجديد الرخص التجارية والمهنية، إصدار الشهادات الصحية، خدمات الرخص الإنشائية، والعديد من الخدمات البلدية الأخرى للمنشآت.">
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
                <img src="assets/images/qwua.png" alt="شعار منصة قوى" class="card-image">
                <div class="card-overlay">
                    <h3>خدمات منصة قوى</h3>
                    <div class="card-buttons">
                        <button class="details-btn"
                            data-title="خدمات منصة قوى"
                            data-image="assets/images/qwua.png"
                            data-details="إدارة كافة خدمات الموظفين والمنشأة عبر منصة قوى، بما في ذلك نقل الخدمات، تغيير المهنة، وإصدار التأشيرات.">
                            التفاصيل
                        </button>
                        <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
                    </div>
                </div>
            </div>
<!-- ======================= -->
<!--    بطاقة بوابة مقيم      -->
<!-- ======================= -->
<div class="job-card">
    <img src="assets/images/muqeem.png" alt="شعار بوابة مقيم" class="card-image">
    <div class="card-overlay">
        <h3>خدمات بوابة مقيم</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات مقيم لإدارة شؤون المقيمين"
                data-image="assets/images/muqeem.png"
                data-details="نقدم جميع خدمات بوابة مقيم الإلكترونية، بما في ذلك إصدار وتجديد الإقامات، إصدار تأشيرات الخروج والعودة، نقل الخدمات، تحديث بيانات المقيمين، والاستعلام التفاعلي عن الموظفين.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>

<!-- ======================= -->
<!--     بطاقة منصة سلامة      -->
<!-- ======================= -->
<div class="job-card">
    <img src="assets/images/salama.png" alt="شعار منصة سلامة" class="card-image">
    <div class="card-overlay">
        <h3>خدمات منصة سلامة</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات سلامة لإصدار تراخيص الدفاع المدني"
                data-image="assets/images/salamah.png"
                data-details="نساعدك على استيفاء متطلبات السلامة وإصدار وتجديد تراخيص الدفاع المدني عبر منصة سلامة، وتركيب أدوات السلامة المعتمدة للمنشآت والمباني التجارية.">
                التفاصيل
            </button>
            <a href="https://wa.me/<?php echo $whatsapp_number; ?>" target="_blank" class="cta-btn">ابدأ الخدمة</a>
        </div>
    </div>
</div>

<!-- ======================= -->
<!--     بطاقة منصة أجير      -->
<!-- ======================= -->
<div class="job-card">
    <img src="assets/images/ajeer.png" alt="شعار منصة أجير" class="card-image">
    <div class="card-overlay">
        <h3>خدمات منصة أجير</h3>
        <div class="card-buttons">
            <button class="details-btn"
                data-title="خدمات أجير لتنظيم العمل المؤقت"
                data-image="assets/images/ajeer.png"
                data-details="نوفر خدمات منصة أجير لتسهيل إعارة العمالة بين المنشآت بشكل نظامي، وإصدار تصاريح العمل المؤقت في مواسم محددة مثل الحج، وتنظيم القوى العاملة لزيادة مرونة وكفاءة العمل.">
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