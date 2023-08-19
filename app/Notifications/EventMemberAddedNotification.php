<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventMemberAddedNotification extends Notification
{
    use Queueable;
    protected $event, $adder;
    /**
     * Create a new notification instance.
     */
    public function __construct($adder, $event)
    {
        $this->event = $event;
        $this->adder = $adder;
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
            'data' => 'You have been added as a co-organizer to the event by' . $this->adder,
            'title' => $this->event->title,
            'image_url' => $this->event->image_url,
        ];
    }
}
