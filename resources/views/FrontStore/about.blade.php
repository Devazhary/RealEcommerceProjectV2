@extends('FrontStore.layouts.app')
@section('title', 'من نحن - سوق الزراعة')
@section('content')

    <main>
        <section class="hero">
            <div class="container">
                <h2>تعرف على سوق الزراعة</h2>
                <p>
                    جذورنا عميقة في الأرض، وطموحنا يلامس السماء لنرتقي بالزراعة العربية.
                </p>
            </div>
        </section>

        <section class="container" style="padding: 4rem 0">
            <div
                style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            align-items: center;
          ">
                <div class="about-info">
                    <h3
                        style="
                color: var(--color-primary);
                font-size: 2.2rem;
                margin-bottom: 1.5rem;
              ">
                        رؤيتنا ورسالتنا
                    </h3>
                    <p
                        style="
                margin-bottom: 1rem;
                font-size: 1.1rem;
                color: var(--color-text-dark);
              ">
                        تأسس <strong>سوق الزراعة</strong> ليكون الجسر الذي يربط بين
                        المزارع وأحدث التقنيات والمستلزمات الزراعية العالمية. نحن نؤمن بأن
                        الزراعة هي أساس الحضارة، ولذلك نسعى لتوفير أجود أنواع البذور،
                        الأسمدة، والمعدات.
                    </p>
                    <p
                        style="
                margin-bottom: 1.5rem;
                font-size: 1.1rem;
                color: var(--color-text-dark);
              ">
                        هدفنا هو دعم المزارع العربي لزيادة إنتاجيته مع الحفاظ على الموارد
                        الطبيعية باستخدام حلول زراعية مستدامة وصديقة للبيئة.
                    </p>
                    <a href="products.html" class="btn primary-btn">تصفح منتجاتنا</a>
                </div>

                <div class="about-image">
                    <img src="images/about-us-farm.jpg" alt="مزارعنا"
                        style="
                width: 100%;
                border-radius: 12px;
                box-shadow: var(--shadow-soft);
              " />
                </div>
            </div>
        </section>

        <section class="quick-links-section">
            <div class="container">
                <h3
                    style="
              text-align: center;
              color: var(--color-primary);
              margin-bottom: 3rem;
              font-size: 2rem;
            ">
                    لماذا يختارنا المزارعون؟
                </h3>
                <div class="footer-grid">
                    <div class="footer-column">
                        <h4>جودة مضمونة</h4>
                        <p>
                            جميع منتجاتنا تخضع لرقابة صارمة لضمان أعلى مستويات الإنتاجية
                            لمحاصيلكم.
                        </p>
                    </div>
                    <div class="footer-column">
                        <h4>دعم فني متخصص</h4>
                        <p>
                            نقدم استشارات زراعية مجانية لعملائنا لمساعدتهم في اختيار الحلول
                            الأنسب لأراضيهم.
                        </p>
                    </div>
                    <div class="footer-column">
                        <h4>توصيل سريع</h4>
                        <p>
                            نمتلك شبكة لوجستية تغطي كافة المناطق لضمان وصول مستلزماتكم في
                            الوقت المناسب.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection('content')
