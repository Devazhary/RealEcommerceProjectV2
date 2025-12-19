@extends('FrontStore.layouts.app')
@section('title', 'تواصل معنا - Hpm للأسمدة والكيماويات')
@section('content')

    <main class="container contact-page">
        <h2 class="page-title">تواصل معنا</h2>
        <p class="contact-description">
            يسعدنا تلقي استفساراتكم وملاحظاتكم عبر النموذج التالي:
        </p>
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form id="contact-form" class="contact-form" method="post" action="{{ route('submitContactForm') }}">
            @csrf
            <div class="form-group">
                <label for="name">الاسم الكامل:</label>
                <input type="text" id="name" name="name" required aria-label="الاسم الكامل" />
            </div>

            <div class="form-group">
                <label for="phone">رقم الهاتف:</label>
                <input type="tel" id="phone" name="phone" required pattern="[0-9]{11}" aria-label="رقم الهاتف" />
                <small class="error-message" id="phone-error"></small>
            </div>

            <div class="form-group">
                <label for="message">الرسالة:</label>
                <textarea id="message" name="message" rows="5" required aria-label="الرسالة"></textarea>
            </div>

            <button type="submit" class="btn primary-btn">إرسال الرسالة</button>
            <p id="submission-message" class="success-message" style="display: none"></p>
        </form>
    </main>

@endsection('content')
