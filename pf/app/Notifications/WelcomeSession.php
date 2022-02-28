<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeSession extends Notification
{
    use Queueable;
    private $sessionData;

    /** 
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sessionData)
    {
        $this->sessionData = $sessionData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
                    ->line($this->sessionData['body'])
                    ->action($this->sessionData ['sessionText'], $this->sessionData['url'])
                    ->line('Thank you');
    }
    public function toDatabase()
    {
        return [
            'action' => 'Got it',
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
