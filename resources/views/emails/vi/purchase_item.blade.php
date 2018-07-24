@component('mail::message')
# Xin chào {{$name}}

Bạn đã có đơn đặt hàng. Xem chi tiết ở liên kết dưới đây

@component('mail::button', ['url' => $url])
Xem đơn đặt hàng
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
