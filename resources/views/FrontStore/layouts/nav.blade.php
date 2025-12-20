<header class="header">
    <div class="header-container">
        <div class="logo-wrapper">
            <img 
                src="{{ asset('storage/logo/logo.png') }}" 
                alt="Logo"
                class="logo-img"
            >
        </div>
        
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav" id="mainNav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('storeProducts') }}" class="nav-link">المنتجات</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contactForm') }}" class="nav-link">تواصل معنا</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aboutUs') }}" class="nav-link">من نحن</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faqs') }}" class="nav-link">الأسئلة الشائعة</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link">السلة</a>
                </li>
            </ul>
        </nav>
    </div>
</header>


<!-- ============================================ -->
<!-- الجزء الثاني: JavaScript - ضعه قبل </body> -->
<!-- ============================================ -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        const body = document.body;
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Toggle menu function
        function toggleMenu() {
            menuToggle.classList.toggle('active');
            mainNav.classList.toggle('active');
            body.classList.toggle('menu-open');
        }
        
        // Close menu function
        function closeMenu() {
            menuToggle.classList.remove('active');
            mainNav.classList.remove('active');
            body.classList.remove('menu-open');
        }
        
        // Toggle menu on button click
        if (menuToggle) {
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMenu();
            });
        }
        
        // Close menu when clicking on a link
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (body.classList.contains('menu-open') && 
                !mainNav.contains(e.target) && 
                !menuToggle.contains(e.target)) {
                closeMenu();
            }
        });
        
        // Prevent closing when clicking inside nav
        if (mainNav) {
            mainNav.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
        
        // Close menu on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && body.classList.contains('menu-open')) {
                closeMenu();
            }
        });
        
        // Add active class to current page link
        const currentPath = window.location.pathname;
        navLinks.forEach(function(link) {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>