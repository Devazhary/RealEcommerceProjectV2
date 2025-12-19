<!-- footer -->
<section class="quick-links-section">
    <div class="container footer-grid">
        <div class="footer-column">
            <h4>روابط سريعة</h4>
            <ul>
                <li><a href="{{ route('storeProducts') }}">جميع المنتجات</a></li>
                <li><a href="cart.html">سلة المشتريات</a></li>
                <li><a href="{{ route('home') }}">منتجات مميزة</a></li>
                <li><a href="{{ route('home') }}">الرئيسية</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>خدماتنا</h4>
            <ul>
                <li><a href="#">الاستشارة الزراعية</a></li>
                <li><a href="#">توصيل سريع</a></li>
                <li><a href="#">ضمان الجودة</a></li>
                <li><a href="#">الدعم الفني</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>تابعنا</h4>
            <div class="social-links">
                <a href="https://www.facebook.com/61556984747775/posts/pfbid0csNXv3gjJnRdLNEN153N5z6dYfC59WD5Y393jw1ZP44aYzNvUY37LRvfwFeNCa4tl/" class="social-icon">فيسبوك</a>
                {{-- <a href="#" class="social-icon">تويتر</a> --}}
                {{-- <a href="#" class="social-icon">انستغرام</a> --}}
                <a href="https://wa.me/+201031948659" class="social-icon">واتساب</a>
            </div>
            <h4 class="contact-prompt">هل لديك استفسار؟</h4>
            <a href="{{ route('contactForm') }}" class="btn primary-btn btn-small">تواصل معنا</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2025  Hpm للأسمدة والكيماويات. جميع الحقوق محفوظة.</p>
    </div>
</footer>
</body>
</html>
