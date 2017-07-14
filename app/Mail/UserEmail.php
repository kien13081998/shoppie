<?php

namespace shoppie\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Orders;
use Cart;
use Users;
class UserEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $order;
   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct(Order $order , Users $users)
   {
       $this->order = $order;
       $this->users = $users
   }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $content = Cart::content();
      $subtotal = Cart::subtotal();
      $this->order->activation_link = route('activateOrder', $this->order->id);
      return $this->markdown('emails.orders.shipped')
          ->with('subtotal', $subtotal)
          ->with('content', $content)
          ->with([
              'order' => $this->order,
              'users' = $this->users,
          ]);
    }
}
