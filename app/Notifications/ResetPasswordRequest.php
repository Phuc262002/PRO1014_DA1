<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;


class ResetPasswordRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public readonly string $token)
    {
        
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = route('password.reset')."/{$this->token}?email={$notifiable->getEmailForPasswordReset()}";

        $userName = User::where([
            'email' => $notifiable->getEmailForPasswordReset(),
            'google_id' => null,
            'facebook_id' => null,
            'github_id' => null,
        ])->first()->name;

        return (new MailMessage)
            ->subject('Thông báo đặt lại mật khẩu tài khoản Petscare')
            ->greeting('Xin chào, ' . $userName . '!')
            ->line('Bạn nhận được email này vì chúng tôi nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.')
            ->line('Vui lòng nhấn vào nút bên dưới để đặt lại mật khẩu.')
            ->action('Đặt lại mật khẩu', $url)
            ->line('Liên kết đặt lại mật khẩu này sẽ hết hạn sau 60 phút.')
            ->line('Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm thao tác nào.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
