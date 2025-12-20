@extends('FrontStore.layouts.app')
@section('title', ' عرض المنتج - Hpm للأسمدة والكيماويات')
@section('content')

    <main>
        <div class="container">
            <!-- تفاصيل المنتج -->
            <div class="product-details">
                <!-- قسم الصورة -->
                <div class="product-image-section">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                </div>

                <!-- قسم المعلومات -->
                <div class="product-info-section">
                    <h1 class="product-title">{{ $product->name }}</h1>

                    <div class="product-price">
                        <span class="price">{{ $product->price }} جنيه</span>
                    </div>

                    <div class="product-description">
                        <h3>الوصف</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                <button class="btn primary-btn add-to-cart" data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                    data-price="{{ $product->price }}" data-image="{{ asset('storage/' . $product->image) }}">
                    أضف للسلة
                </button>
            </div>
        </div>
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

@endsection
