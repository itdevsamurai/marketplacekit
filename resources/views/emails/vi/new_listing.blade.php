@component('mail::message')
# Xin chào Admin,

Một tin mới đã được đăng: {{$title}}

@component('mail::button', ['url' => $url])
Xem tin
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
