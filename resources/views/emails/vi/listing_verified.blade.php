@component('mail::message')
# Xin chào {{ $name }}

Hooray! chúc mừng bạn! tin của bạn đã được chấp nhận và đã được đăng trên trang của chúng tôi.

@component('mail::button', ['url' => $url])
Xem tin
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
