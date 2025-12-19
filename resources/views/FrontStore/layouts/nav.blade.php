<!-- nav -->
<header class="header">
    <div class="container">
        <h1 class="logo">Hpm للأسمدة والكيماويات</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">الرئيسية</a></li>
                <li><a href="{{ route('storeProducts') }}">المنتجات</a></li>
                <li><a href="{{ route('contactForm') }}">تواصل معنا</a></li>
                <li><a href="{{ route('aboutUs') }}">من نحن</a></li>
                <li><a href="{{ route('faqs') }}">الأسئلة الشائعة</a></li>
                <li>
                    <a href="{{ route('cart.index') }}">السلة</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
