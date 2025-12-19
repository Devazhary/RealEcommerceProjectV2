@extends('FrontStore.layouts.app')
@section('title', 'سلة المشتريات')

@section('content')

    <main class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
            <h2 class="page-title" style="margin: 0;">سلة المشتريات</h2>
            @if ($cart && count($cart) > 0)
                <a href="{{ route('cart.clear') }}" class="btn remove-btn" style="background: linear-gradient(135deg, #D32F2F, #C62828); color: white;">مسح السلة بالكامل</a>
            @endif
        </div>

        @if ($cart && count($cart) > 0)
            {{-- حساب الإجمالي الكلي هنا للتأكد من دقته --}}
            @php $calculatedTotal = 0; @endphp

            <form action="{{ route('cart.update') }}" method="POST">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th>صورة</th>
                            <th>المنتج</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                            <th>الإجمالي</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            @php 
                                $rowTotal = (float)$item['price'] * (int)$item['quantity']; 
                                $calculatedTotal += $rowTotal;
                            @endphp
                            <tr>
                                <td data-label="صورة">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" width="60" style="border-radius: 8px;">
                                </td>
                                <td data-label="المنتج" style="font-weight: 600; color: var(--color-text-dark);">{{ $item['name'] }}</td>
                                <td data-label="السعر">{{ number_format($item['price'], 2) }} جنيه</td>
                                <td data-label="الكمية">
                                    <input type="number" name="quantities[{{ $id }}]"
                                           value="{{ $item['quantity'] }}" min="1" 
                                           style="width: 70px; padding: 0.5rem; border: 2px solid #e2e8f0; border-radius: 8px; text-align: center;">
                                </td>
                                <td data-label="الإجمالي" style="font-weight: 700; color: var(--color-primary-dark);">
                                    {{ number_format($rowTotal, 2) }} جنيه
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="cart-actions-container" style="text-align: center; margin: 2rem 0;">
                    <button type="submit" class="update-cart-btn">
                        تحديث الكميات
                    </button>
                </div>
            </form>

            {{-- استخدام القيمة المحسوبة مباشرة لضمان عدم حدوث خطأ --}}
            <div class="cart-total">
                الإجمالي الكلي: <span>{{ number_format($calculatedTotal) }}</span> جنيه
            </div>

            @php
                $rawPrice = $calculatedTotal;
                $totalPrice = str_replace(',', '', $rawPrice);
            @endphp


            <div style="text-align: center; margin-bottom: 3rem;">
                <a href="{{ route('confirmOrder', $totalPrice) }}" class="btn primary-btn" style="padding: 1rem 3rem; font-size: 1.2rem;">تأكيد الطلب</a>
            </div>
        @else
            <div style="text-align: center; padding: 5rem 0;">
                <p style="font-size: 1.5rem; color: var(--color-text-light); margin-bottom: 2rem;">السلة فارغة حالياً..</p>
                <a href="{{ route('storeProducts') }}" class="btn primary-btn">العودة للتسوق</a>
            </div>
        @endif
    </main>

@endsection