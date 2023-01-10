<?php

namespace App\Notifications;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewApplication extends Notification
{
    use Queueable;

    protected $application;
    protected $is_new;

    public function __construct(Application $application,$is_new = true)
    {
        $this->application = $application;
        $this->is_new = $is_new;
    }


    public function via($notifiable)
    {
//        return ['database', 'mail'];
        return ['database'];
    }

    public function toDatabase()
    {
        return [
            'data' => $this->application,
            'url' => route('dashboard.applications.show',
                ['lang' => app()->getLocale(), 'application' => $this->application]),

            'message' => $this->is_new ? 'New Application' : 'Old Application',
            'id' => $this->application->id,
        ];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->markdown('website.emails.application',['application' => $this->application]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
