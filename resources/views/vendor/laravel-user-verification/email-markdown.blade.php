@component('mail::message')

Bạn đang sắp hoàn thành việc đăng kí thành viên với {{ config('app.name') }} rồi đấy. Chỉ còn một bước nhỏ nữa là bạn hãy bấm vào liên kết sau để xác nhận địa chỉ email của bạn nhé

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Xác nhận địa chỉ email
@endcomponent

Thân ái,<br>
{{ config('app.name') }}
@endcomponent
