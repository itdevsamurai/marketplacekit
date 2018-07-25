Bấm vào đây để xác nhận địa chỉ email: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">{{ $link }}</a>
