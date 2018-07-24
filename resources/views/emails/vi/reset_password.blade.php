@component('mail::message')
# Xin chào {{ $name }}

Email này được gửi đến vì bạn đã yêu cầu khởi tạo lại mật khẩu trên hệ thống của chúng tôi.

@component('mail::button', ['url' => $url])
Khởi tạo lại mật khẩu
@endcomponent

Thân ái,<br>
{{ config('app.name') }}

@component('mail::subcopy', ['url' => $url])
Nếu liên kết không hoạt động bạn có thể truy cập địa chỉ từ trình duyệt: [{{ $url}}]({{ $url}})
@endcomponent

@endcomponent