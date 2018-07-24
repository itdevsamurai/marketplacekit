@component('mail::message')
# Xin chào {{$name}}

Đặt hàng của bạn cho "{{$title}}" đã được chấp nhận. Nếu có gì thắc mắc hãy liên lạc với người bán nhé.

@component('mail::button', ['url' => $url])
Lịch sử đơn hàng
@endcomponent

Cám ơn bạn,<br>
{{ config('app.name') }}
@endcomponent
