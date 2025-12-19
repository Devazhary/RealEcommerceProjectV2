@extends('FrontStore.layouts.app')
@section('title', 'تأكيد الطلب - Hpm للأسمدة والكيماويات')
@section('content')

    <main class="container">
        <h2 class="page-title">إتمام الطلب</h2>
        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form class="order-form" method="post" action="{{ route('submitOrder') }}">
            @csrf
            <!-- الاسم -->
            <div class="form-group">
                <label>الاسم الكامل *</label>
                <input type="text" name="fullName" placeholder="اكتب اسمك بالكامل" required>
            </div>

            <!-- رقم الهاتف الأساسي -->
            <div class="form-group">
                <label>رقم الهاتف الأساسي *</label>
                <input type="tel" name="phone" placeholder="01XXXXXXXXX" required>
            </div>

            <!-- رقم الهاتف الثاني -->
            <div class="form-group">
                <label>رقم هاتف إضافي (اختياري)</label>
                <input type="tel" name="phone2" placeholder="رقم آخر للتواصل">
            </div>

            <!-- الإيميل -->
            <div class="form-group">
                <label>البريد الإلكتروني (اختياري)</label>
                <input type="email" name="email" placeholder="example@email.com">
            </div>

            <!-- المحافظة -->
            <div class="form-group">
                <label>المحافظة *</label>
                <select required name="government">
                    <option value="" disabled>اختر المحافظة</option>
                    <option value="القاهرة">القاهرة</option>
                    <option value="الجيزة">الجيزة</option>
                    <option value="الإسكندرية">الإسكندرية</option>
                    <option value="الدقهلية">الدقهلية</option>
                    <option value="الشرقية">الشرقية</option>
                    <option value="الغربية">الغربية</option>
                    <option value="المنوفية">المنوفية</option>
                    <option value="البحيرة">البحيرة</option>
                    <option value="كفر الشيخ">كفر الشيخ</option>
                    <option value="دمياط">دمياط</option>
                    <option value="بورسعيد">بورسعيد</option>
                    <option value="الإسماعيلية">الإسماعيلية</option>
                    <option value="السويس">السويس</option>
                    <option value="بني سويف">بني سويف</option>
                    <option value="الفيوم">الفيوم</option>
                    <option value="المنيا">المنيا</option>
                    <option value="أسيوط">أسيوط</option>
                    <option value="سوهاج">سوهاج</option>
                    <option value="قنا">قنا</option>
                    <option value="الأقصر">الأقصر</option>
                    <option value="أسوان">أسوان</option>
                    <option value="البحر الأحمر">البحر الأحمر</option>
                    <option value="الوادي الجديد">الوادي الجديد</option>
                    <option value="مطروح">مطروح</option>
                    <option value="شمال سيناء">شمال سيناء</option>
                    <option value="جنوب سيناء">جنوب سيناء</option>
                </select>
            </div>

            <!-- المدينة / المركز -->
            <div class="form-group">
                <label>المدينة / المركز *</label>
                <input type="text" name="city" placeholder="مثال: مركز بلبيس" required>
            </div>

            <!-- العنوان -->
            <div class="form-group">
                <label>العنوان بالتفصيل *</label>
                <textarea name="address" placeholder="الشارع – رقم المنزل – علامة مميزة" required></textarea>
            </div>

            <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">

            <!-- زر الإرسال -->
            <button type="submit" class="btn primary-btn order-btn">
                تأكيد الطلب
            </button>

        </form>
    </main>

@endsection('content')
