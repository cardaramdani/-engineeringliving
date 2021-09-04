<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Channels\Messages\WhatsAppMessage;
use App\Channels\WhatsAppChannel;
use App\Order;

class OrderProcessed extends Notification
{
    use Queueable;

    public $order;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function __construct(Order $order)
  {
    $this->order = $order;
  }

  public function via($notifiable)
  {
    return [WhatsAppChannel::class];
  }

  public function toWhatsApp($notifiable)
  {
    $orderUrl = url("/orders/{$this->order->id}");
    $company = 'Acme';
    $deliveryDate = $this->order->created_at->addDays(4)->toFormattedDateString();


    return (new WhatsAppMessage)
        ->content("Your {$company} order of {$this->order->name} has shipped and should be delivered on {$deliveryDate}. Details: {$orderUrl}");
    }
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
