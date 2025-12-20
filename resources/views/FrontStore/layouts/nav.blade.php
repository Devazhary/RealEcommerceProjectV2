@php
    use App\Models\Category;
    $categories = Category::where('is_active', true)->get();
@endphp
<header class="header">
    <div class="header-container">
        <div class="logo-wrapper">
            <img src="{{ asset('storage/logo/logo.png') }}" alt="Logo" style="width: 80px; height: auto;">
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

                <!-- التصنيفات مع القائمة المنسدلة -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        التصنيفات
                        <i class="dropdown-arrow">▼</i>
                    </a>
                    <ul class="dropdown-menu">
                        @if (!empty($categories))
                            @foreach ($categories as $category)
                                <li><a
                                        href="{{ route('showProductsByCategory', parameters: $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        @else
                            <p>لا توجد تصنيفات متاحة</p>
                        @endif
                    </ul>
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


<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        const body = document.body;
        const navLinks = document.querySelectorAll('.nav-link');
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdown = document.querySelector('.dropdown');

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
            // Close dropdown when closing menu
            if (dropdown) {
                dropdown.classList.remove('active');
            }
        }

        // Toggle menu on button click
        if (menuToggle) {
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMenu();
            });
        }

        // Handle dropdown toggle
        if (dropdownToggle) {
            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropdown.classList.toggle('active');
            });
        }

        // Close menu when clicking on a regular link (not dropdown)
        navLinks.forEach(function(link) {
            if (!link.classList.contains('dropdown-toggle')) {
                link.addEventListener('click', function() {
                    closeMenu();
                });
            }
        });

        // Close dropdown when clicking on dropdown item
        const dropdownItems = document.querySelectorAll('.dropdown-menu a');
        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
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

            // Close dropdown when clicking outside
            if (dropdown && !dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
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
            if (e.key === 'Escape') {
                if (body.classList.contains('menu-open')) {
                    closeMenu();
                }
                if (dropdown && dropdown.classList.contains('active')) {
                    dropdown.classList.remove('active');
                }
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
