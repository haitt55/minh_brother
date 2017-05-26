<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Http\Request;

class ResetPassword extends Notification
{

    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from(config('mail')['username'], 'Admin <daotao@edu.vn>')
                    ->subject('Cấp lại mật khẩu')
                    ->line('Một người nào đó đã yêu cầu khôi phục lại mật khẩu của tài khoản')
                    ->line("Email: $notifiable->email")
                    ->line('Nếu đây là một sai sót, vui lòng bỏ qua email này và sẽ không có chuyện gì xảy ra.')
                    ->line('Để đặt lại mật khẩu, bạn vui lòng truy cập theo địa chỉ sau:')
                    ->action('Cấp lại mật khẩu', route('password.reset', ['token' => $this->token, 'email' => $notifiable->email]));
    }
    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'email' => $notifiable->email,
        ];
    }
}
