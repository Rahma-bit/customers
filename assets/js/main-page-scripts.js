document.addEventListener('DOMContentLoaded', function () {

    // --- 1. إعداد Swiper لآراء العملاء ---
    try {
        const testimonialSwiper = new Swiper('.testimonial-slider', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    } catch (e) {
        console.log("Swiper slider not found or failed to initialize.");
    }

    // --- 2. إعداد Modal (النافذة المنبثقة) للوثائق ---
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
    
    // --- 3. كود تأثير الظهور عند التمرير + تشغيل العدادات ---
    const animatedElements = document.querySelectorAll('.reveal-on-scroll, .counter');

    if (animatedElements.length > 0) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                }

                // إضافة كلاس الظهور للعناصر
                if (entry.target.classList.contains('reveal-on-scroll')) {
                    entry.target.classList.add('is-visible');
                }

                // تشغيل العدادات الرقمية
                if (entry.target.classList.contains('counter')) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    
                    // منع إعادة تشغيل العداد
                    if (counter.classList.contains('animated')) return; 
                    counter.classList.add('animated');

                    let current = 0;
                    const increment = target / 200; // سرعة العداد

                    const updateCounter = () => {
                        if (current < target) {
                            current += increment;
                            counter.innerText = Math.ceil(current);
                            requestAnimationFrame(updateCounter); // أنيميشن أكثر سلاسة
                        } else {
                            counter.innerText = target; // الوصول للرقم النهائي
                        }
                    };
                    updateCounter();
                }
                
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.15 // تشغيل التأثير عند ظهور 15% من العنصر
        });

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    }
});