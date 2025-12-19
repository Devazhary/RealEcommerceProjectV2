@extends('FrontStore.layouts.app')
@section('title', ' Hpm للأسمدة والكيماويات - أفضل الأسمدة والمبيدات لمحاصيلك')
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
            @if (!$specialProducts->isEmpty())
                <div class="product-grid" id="featured-products">
                    <!-- المنتج 1-->
                    @foreach ($specialProducts as $specialProduct)
                        <div class="product-card">
                            <img src="{{ asset($specialProduct->image) }}" alt="{{ $specialProduct->name }}" />
                            <div class="product-info">
                                <h4>{{ $specialProduct->name }}</h4>
                                <p>
                                    {{ $specialProduct->description }}
                                </p>
                                <span class="price">{{ $specialProduct->price }} جنيه</span>
                                <button class="btn primary-btn add-to-cart" data-id="{{ $specialProduct->id }}"
                                    data-name="{{ $specialProduct->name }}" data-price="{{ $specialProduct->price }}"
                                    data-image="{{ asset($specialProduct->image) }}">
                                    أضف للسلة
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>لا توجد منتجات مميزة حالياً</p>
            @endif
        </section>
        </body>

        </html>
    </main>

    <script>
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                let id = this.dataset.id;

                fetch("{{ route('cart.add') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            id: id
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert("تم إضافة المنتج للسلة!");
                    });
            });
        });
    </script>
@endsection('content')
