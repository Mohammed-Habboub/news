<?php

namespace App\Notifications;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewEventCreateNotification extends Notification
{
    use Queueable;

    protected $event;

    /**
     * Create a new notification instance.
     */
    public function __construct(Event $event)
    {
        //
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('New Event')
                    ->greeting('Hello, ' . $notifiable->name)
                    ->line('A new event has been created.')
                    ->action('View Event', url('/'))
                    ->line('Experience the beauty of new events. Join us and be enchanted!')
                    ->line('Thank you for using our application!');
    }
    public function toDatabase(object $notifiable)
    {
        return [
                'title'  => 'New Event',
                'body'   => 'A new event has been created.',
                'action' => url('/'),
                'icon'   => '',
        ];
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
