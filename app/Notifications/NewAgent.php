<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAgent extends Notification
{
    use Queueable;

    public $user_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('New Agent registered.')
                    ->action('Show Agent', route('users.index',
                        ['lang' => app()->getLocale()]))
                    ->line('Thank you!');
    }

    public function toDatabase()
    {
        return [
            'data' => $this->user_id,
            'url' => route('users.edit',
                ['lang' => app()->getLocale(),'user'=>$this->user_id]),

            'message' => 'New Agent',
        ];
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
            //
        ];
    }
}
