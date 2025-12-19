@extends('FrontStore.layouts.app')
@section('title', 'منتجاتنا - Hpm للأسمدة والكيماويات')
@section('content')

    <main class="container">
        <h2 class="page-title">جميع المنتجات</h2>
        <section class="product-grid" id="product-list">
            <!-- المنتج 1  -->
            @if(!$products->isEmpty())
                @foreach ($products as $product)
                <div class="product-card">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" />
                    <div class="product-info">
                        <h4>{{ $product->name }}</h4>
                        <p>
                            {{ $product->description }}
                        </p>
                        <span class="price">{{ $product->price }} جنيه</span>
                        <button class="btn primary-btn add-to-cart" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                            data-image="{{ asset('storage/'.$product->image) }}">
                            أضف للسلة
                        </button>
                    </div>
                </div>
                @endforeach
            @else
            <p>لا توجد منتجات متاحة حالياً.</p>
            @endif
        </section>
    </main>

    <script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(){
            let id = this.dataset.id;

            fetch("{{ route('cart.add') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({id: id})
            })
            .then(res => res.json())
            .then(data => {
                alert("تم إضافة المنتج للسلة!");
            });
        });
    });
</script>

@endsection('content')
