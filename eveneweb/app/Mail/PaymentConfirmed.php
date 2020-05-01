<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentConfirmed extends Mailable {
  use Queueable, SerializesModels;

  private $customerName;
  private $vendorName;
  private $order;

  /**
   * Create a new message instance.
   *
   * @param $customerName
   * @param $vendorName
   * @param $order
   */
  public function __construct($customerName, $vendorName, $order) {
    $this->customerName = $customerName;
    $this->vendorName = $vendorName;
    $this->order = $order;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    return $this->subject('Payment Confirmed')
      ->view('email.payment-confirmed')
      ->with('customerName', $this->customerName)
      ->with('vendorName', $this->vendorName)
      ->with('order', $this->order);
  }
}
