<!-- footer -->
<section class="quick-links-section">
    <div class="container footer-grid">
        <div class="footer-column">
            <h4>روابط سريعة</h4>
            <ul>
                <li><a href="products.html">جميع المنتجات</a></li>
                <li><a href="cart.html">سلة المشتريات</a></li>
                <li><a href="#featured-products">منتجات مميزة</a></li>
                <li><a href="index.html">الرئيسية</a></li>
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
                <a href="#" class="social-icon">فيسبوك</a>
                <a href="#" class="social-icon">تويتر</a>
                <a href="#" class="social-icon">انستغرام</a>
                <a href="#" class="social-icon">واتساب</a>
            </div>
            <h4 class="contact-prompt">هل لديك استفسار؟</h4>
            <a href="contact.html" class="btn primary-btn btn-small">تواصل معنا</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2025 سوق الزراعة. جميع الحقوق محفوظة.</p>
    </div>
</footer>

<script src="{{ asset('assetsFrontStore/frontStore/js/main.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        updateCartCount();

        // إضافة المنتجات للسلة
        const addToCartButtons = document.querySelectorAll(".add-to-cart");
        addToCartButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const product = {
                    id: this.dataset.id,
                    name: this.dataset.name,
                    price: parseFloat(this.dataset.price),
                    image: this.dataset.image,
                    quantity: 1,
                };

                addToCart(product);
            });
        });
    });
</script>
</body>

</html>
