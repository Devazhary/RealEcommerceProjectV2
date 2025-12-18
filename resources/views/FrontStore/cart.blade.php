@extends('FrontStore.layouts.app')
@section('title', 'سلة المشتريات - سوق الزراعة')
@section('content')

    <main class="container">
        <h2 class="page-title">سلة المشتريات</h2>
        <section class="cart-items" id="cart-items"></section>

        <div class="cart-summary" id="cart-summary" style="display: none">
            <h3>ملخص الطلب</h3>
            <p>الإجمالي: <span id="cart-total">0.00</span> ريال</p>
            <button class="btn primary-btn" onclick="alert('تم إكمال عملية الطلب بنجاح!')">
                إتمام الطلب
            </button>
        </div>

        <p id="empty-cart-message" class="empty-message">سلة المشتريات فارغة.</p>

        <a href="products.html" class="btn secondary-btn continue-shopping-btn">متابعة التسوق</a>
    </main>

@endsection('content')
