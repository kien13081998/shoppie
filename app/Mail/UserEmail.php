<?php

namespace shoppie\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use shoppie\Orders;
use shoppie\Users;
use Cart;
class UserEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $order;
     public $users;
   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct(Orders $order,Users $users)
   {
       $this->order = $order;
       $this->users = $users;
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
      return $this->view('emails.orders.shipped')
          ->with('subtotal', $subtotal)
          ->with('content', $content)
          ->with([
              'order' => $this->order,
              'users' => $this->users,

          ]);
    }
}
