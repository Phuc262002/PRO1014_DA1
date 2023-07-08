@component('mail::message')
# Xin chào, {{$user->name}}!<br>

Bạn đã đăng ký tài khoản thành công với email {{$user->email}}.<br>
Duới đây là mã OTP để xác thực tài khoản của bạn.<br>

@component('mail::button', ['url' => ''])
{{$OTP}}
@endcomponent

Mã OTP này sẽ hết hạn sau 1 phút.<br>

Thanks,<br>
<strong style="color:'red'">{{ config('app.name') }}</strong>
@endcomponent
