@extends('FrontStore.layouts.app')
@section('title', 'منتجاتنا - سوق الزراعة')
@section('content')

    <main class="container">
        <h2 class="page-title">جميع المنتجات</h2>
        <section class="product-grid" id="product-list">
            <!-- المنتج 1: سماد NPK -->
            <div class="product-card">
                <img src="images/npk-fertilizer.jpg" alt="سماد NPK متوازن" />
                <div class="product-info">
                    <h4>سماد NPK متوازن</h4>
                    <p>
                        سماد متكامل يحتوي على النيتروجين والفوسفور والبوتاسيوم لنمو صحي
                        ومتوازن
                    </p>
                    <span class="price">250 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="1" data-name="سماد NPK متوازن" data-price="250"
                        data-image="images/npk-fertilizer.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 2: مبيد حشري عضوي -->
            <div class="product-card">
                <img src="images/organic-pesticide.jpg" alt="مبيد حشري عضوي" />
                <div class="product-info">
                    <h4>مبيد حشري عضوي</h4>
                    <p>مبيد طبيعي وآمن يحمي محاصيلك من الآفات دون ضرر على البيئة</p>
                    <span class="price">180 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="2" data-name="مبيد حشري عضوي" data-price="180"
                        data-image="images/organic-pesticide.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 3: سماد يوريا -->
            <div class="product-card">
                <img src="images/urea-fertilizer.jpg" alt="سماد يوريا" />
                <div class="product-info">
                    <h4>سماد يوريا</h4>
                    <p>غني بالنيتروجين يعزز النمو الخضري ويزيد من إنتاجية المحاصيل</p>
                    <span class="price">200 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="3" data-name="سماد يوريا" data-price="200"
                        data-image="images/urea-fertilizer.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 4: مبيد فطري -->
            <div class="product-card">
                <img src="images/fungicide.jpg" alt="مبيد فطري" />
                <div class="product-info">
                    <h4>مبيد فطري</h4>
                    <p>فعال ضد الأمراض الفطرية التي تصيب النباتات ويحمي المحاصيل</p>
                    <span class="price">220 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="4" data-name="مبيد فطري" data-price="220"
                        data-image="images/fungicide.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 5: سماد عضوي -->
            <div class="product-card">
                <img src="images/organic-fertilizer.jpg" alt="سماد عضوي" />
                <div class="product-info">
                    <h4>سماد عضوي</h4>
                    <p>سماد طبيعي 100% يحسن خصوبة التربة ويزيد من جودة المحصول</p>
                    <span class="price">150 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="5" data-name="سماد عضوي" data-price="150"
                        data-image="images/organic-fertilizer.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 6: سماد فوسفاتي -->
            <div class="product-card">
                <img src="images/phosphate-fertilizer.jpg" alt="سماد فوسفاتي" />
                <div class="product-info">
                    <h4>سماد فوسفاتي</h4>
                    <p>يعزز نمو الجذور ويزيد من قوة النبات ومقاومته للأمراض</p>
                    <span class="price">190 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="6" data-name="سماد فوسفاتي" data-price="190"
                        data-image="images/phosphate-fertilizer.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 7: مبيد أعشاب -->
            <div class="product-card">
                <img src="images/herbicide.jpg" alt="مبيد أعشاب" />
                <div class="product-info">
                    <h4>مبيد أعشاب</h4>
                    <p>يقضي على الحشائش الضارة دون التأثير على المحاصيل المزروعة</p>
                    <span class="price">210 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="7" data-name="مبيد أعشاب" data-price="210"
                        data-image="images/herbicide.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 8: سماد بوتاسي -->
            <div class="product-card">
                <img src="images/potassium-fertilizer.jpg" alt="سماد بوتاسي" />
                <div class="product-info">
                    <h4>سماد بوتاسي</h4>
                    <p>يحسن جودة الثمار ويزيد من مقاومة النبات للجفاف والأمراض</p>
                    <span class="price">230 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="8" data-name="سماد بوتاسي" data-price="230"
                        data-image="images/potassium-fertilizer.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>

            <!-- المنتج 9: محسن تربة -->
            <div class="product-card">
                <img src="images/soil-conditioner.jpg" alt="محسن تربة" />
                <div class="product-info">
                    <h4>محسن تربة</h4>
                    <p>
                        يحسن بنية التربة ويزيد من قدرتها على الاحتفاظ بالماء والمغذيات
                    </p>
                    <span class="price">170 جنيه</span>
                    <button class="btn primary-btn add-to-cart" data-id="9" data-name="محسن تربة" data-price="170"
                        data-image="images/soil-conditioner.jpg">
                        أضف للسلة
                    </button>
                </div>
            </div>
        </section>
    </main>

@endsection('content')
