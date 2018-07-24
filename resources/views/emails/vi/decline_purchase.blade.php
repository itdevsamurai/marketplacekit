@component('mail::message')
# Xin chào {{$name}}

Rất tiếc người bán không thể xử lý đơn hàng của bạn cho "{{$title}}". Đặt hàng của bạn sẽ được hoàn lại. Liên hệ trực tiếp với người bán nếu bạn muốn biết thêm thông tin nhé.

@component('mail::button', ['url' => $url])
Lịch sử mua bán
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
