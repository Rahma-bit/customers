<?php
  // هذا السطر يقوم بجلب اسم الصفحة الحالية (مثل: index.php, aboutus.php)
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts (Amiri) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet" />

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <style>
    :root {
      --primary-color: #2c3539;
      --secondary-color: #ffc107;
      --text-color: #555;
      --heading-color: #2c3539;
      --white-color: #ffffff;
    }

    body {
      font-family: 'Amiri';
      direction: rtl;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .main-header {
       background-color:rgb(181, 181, 181);
      padding: 10px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      transition: background-color 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
    }

    .main-header.scrolled-header {
      background-color:rgb(214, 214, 214);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 5px 0;
    }

    .header-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

   /* ثبتي ارتفاع الهيدر */
    .main-header .container {
      height: 100px; 
      align-items: center;
    }

    /* تحكّمي في حجم صورة الشعار */
    .logo-link img {
      height: 180px;
      width: auto;
      object-fit: contain;
    }

    .nav-icon {
      height: 100%;
      width: auto;
      object-fit: contain;
    }

    .main-nav {
      flex-grow: 1;
      text-align: center;
    }

    .main-nav ul {
      list-style: none;
      display: inline-flex;
      margin: 0;
      padding: 0;
    }

    .main-nav ul li {
      margin: 0 15px;
    }

    .main-nav ul li a {
      text-decoration: none;
      color: var(--text-color);
      font-weight: 600;
      font-size: 24px;
      padding: 5px 0;
      border-bottom: 2px solid transparent;
      transition: color 0.3s ease, border-color 0.3s ease;
      white-space: nowrap;
    }

    .main-nav ul li a:hover,
    .main-nav ul li a.active { /* هذا الكود هو المسؤول عن اللون والخط */
      color: var(--secondary-color);
      border-bottom-color: var(--secondary-color);
    }

    .header-cta-button {
      background-color: var(--secondary-color);
      color: var(--heading-color);
      padding: 10px 25px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 700;
      font-size: 15px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      white-space: nowrap;
    }

    .header-cta-button:hover {
      background-color: #e0ac00;
      transform: translateY(-2px);
    }

    .logo-container {
      order: 1;
      margin-right: -300px;
      margin-left: 170px;
    }

    .nav-container {
      order: 2;
      flex-grow: 1;
      display: flex;
      justify-content: center;
      margin-left: 180px;
    }

    .cta-container {
      order: 3;
    }
  </style>
</head>
<body>
  <header class="main-header">
    <div class="container header-inner">
      <div class="logo-container">
        <a href="index.php" title="sanad" class="logo-link">
          <img src="assets/images/sanad.png" alt="sanad logo" class="nav-icon" />
        </a>
      </div>

      <div class="nav-container">
        <nav class="main-nav">
          <ul>
            <!-- القائمة الديناميكية الجديدة -->
            <li><a href="index.php" class="<?php if ($currentPage == 'index.php') { echo 'active'; } ?>">الصفحة الرئيسية</a></li>
             <li><a href="individuals.php" class="<?php if ($currentPage == 'individuals.php') { echo 'active'; } ?>">خدمات الأفراد</a></li>
             <li><a href="comp.php" class="<?php if ($currentPage == 'comp.php') { echo 'active'; } ?>">خدمات المؤسسات</a></li>
             <li><a href="students.php" class="<?php if ($currentPage == 'students.php') { echo 'active'; } ?>">الخدمات الطلابية</a></li>
            <li><a href="employer.php" class="<?php if ($currentPage == 'employer.php') { echo 'active'; } ?>">الوظائف</a></li>
          
        </ul>
        </nav>
      </div>

     <div class="cta-container">
    <!-- 
      - استبدل 966500000000 برقم الواتساب الخاص بك بالصيغة الدولية (بدون + أو 00).
      - target="_blank" يضمن فتح واتساب في نافذة جديدة.
    -->
    <a href="https://wa.me/966558071211" target="_blank" class="header-cta-button">ابدأ الخدمة</a>
</div>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const header = document.querySelector('.main-header');
      if (header) {
        window.addEventListener('scroll', () => {
          if (window.scrollY > 50) {
            header.classList.add('scrolled-header');
          } else {
            header.classList.remove('scrolled-header');
          }
        });
      }
    });
  </script>
</body>
</html>