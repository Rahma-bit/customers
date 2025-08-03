<?php
// footer.php
?>

    <!-- ======================= FOOTER ======================== -->
    <footer class="site-footer">
        <div class="container">
            <p>جميع الحقوق محفوظة، مكتب سند للخدمات العامة © 2025</p>
        </div>
    </footer>

    <style>
        /* 
         * لضمان عمل الفوتر بشكل صحيح دائماً، تم تضمين الأنماط هنا.
         * من الأفضل تعريف هذه المتغيرات في ملف CSS رئيسي، ولكن هذا يضمن أن المكون مستقل.
        */
:root {
    --text-muted: rgb(3, 3, 3);
    --card-border-color: rgba(165, 165, 165, 0.95);
    --background-main:rgb(122, 67, 67); /* لون خلفية ناعم وأنيق */
}


        .site-footer {
            padding: 30px 0;
            text-align: center;
            color: var(--text-muted);
            border-top: 1px solid var(--card-border-color);
            margin-top: 80px; /* لإعطاء مساحة كافية فوق الفوتر */
        }

        .site-footer p {
            margin: 0;
            font-size: 20px;
        }

    </style>

</body>
</html>