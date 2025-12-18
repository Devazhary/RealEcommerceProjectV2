@extends('FrontStore.layouts.app')
@section('title', 'سوق الزراعة - أفضل الأسمدة والمبيدات لمحاصيلك')
@section('content')

    <!-- content -->
    <main>
        <section class="hero">
            <div class="container">
                <h2>أفضل الأسمدة والمبيدات لمحاصيلك</h2>
                <p>
                    نوفر أجود المستلزمات الزراعية لضمان نمو محاصيلك بأفضل شكل
                    ممكن.
                </p>
                <a href="products.html" class="btn primary-btn">اكتشف منتجاتنا الآن</a>
            </div>
        </section>

        <section class="featured-products container">
            <h3>منتجات مميزة</h3>
            <div class="product-grid" id="featured-products">
                <!-- المنتج 1: سماد NPK -->
                <div class="product-card">
                    <img src="images/npk-fertilizer.jpg" alt="سماد NPK متوازن" />
                    <div class="product-info">
                        <h4>سماد NPK متوازن</h4>
                        <p>
                            سماد متكامل يحتوي على النيتروجين والفوسفور
                            والبوتاسيوم لنمو صحي ومتوازن
                        </p>
                        <span class="price">250 جنيه</span>
                        <button class="btn primary-btn add-to-cart" data-id="1" data-name="سماد NPK متوازن"
                            data-price="250" data-image="images/npk-fertilizer.jpg">
                            أضف للسلة
                        </button>
                    </div>
                </div>

                <!-- المنتج 2: مبيد حشري عضوي -->
                <div class="product-card">
                    <img src="images/organic-pesticide.jpg" alt="مبيد حشري عضوي" />
                    <div class="product-info">
                        <h4>مبيد حشري عضوي</h4>
                        <p>
                            مبيد طبيعي وآمن يحمي محاصيلك من الآفات دون ضرر على
                            البيئة
                        </p>
                        <span class="price">180 جنيه</span>
                        <button class="btn primary-btn add-to-cart" data-id="2" data-name="مبيد حشري عضوي"
                            data-price="180" data-image="images/organic-pesticide.jpg">
                            أضف للسلة
                        </button>
                    </div>
                </div>

                <!-- المنتج 3: سماد يوريا -->
                <div class="product-card">
                    <img src="images/urea-fertilizer.jpg" alt="سماد يوريا" />
                    <div class="product-info">
                        <h4>سماد يوريا</h4>
                        <p>
                            غني بالنيتروجين يعزز النمو الخضري ويزيد من إنتاجية
                            المحاصيل
                        </p>
                        <span class="price">200 جنيه</span>
                        <button class="btn primary-btn add-to-cart" data-id="3" data-name="سماد يوريا" data-price="200"
                            data-image="images/urea-fertilizer.jpg">
                            أضف للسلة
                        </button>
                    </div>
                </div>
            </div>
        </section>
        </body>

        </html>
    </main>
@endsection('content')
