<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventMemberRemovedNotification extends Notification
{
    use Queueable;
    protected $event, $remover;
    /**
     * Create a new notification instance.
     */
    public function __construct($remover, $event)
    {
        $this->event = $event;
        $this->remover = $remover;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'data' => 'You have been removed from the event by' . $this->remover,
            'title' => $this->event->title,
            'image_url' => $this->event->image_url,
        ];
    }
}
