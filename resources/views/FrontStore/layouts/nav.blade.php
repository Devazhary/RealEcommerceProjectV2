<!-- nav -->
<header class="header">
    <div class="container">
        <img 
        src="{{ asset('storage/logo/logo.png') }}" 
        style="width: 120px; height: 100px;"
        >
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
