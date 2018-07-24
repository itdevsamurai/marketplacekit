@component('mail::message')
# Chào Admin,

{{$name}} đã gửi cho bạn tin nhắn sau:

"{{$comment}}"

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
