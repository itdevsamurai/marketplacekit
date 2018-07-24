@component('mail::message')
# Xin chào {{ $name }}

Bạn vừa nhận được tin nhắn từ thành viên {{ $sender }}.

@component('mail::button', ['url' => $url])
Xem hòm thư
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
