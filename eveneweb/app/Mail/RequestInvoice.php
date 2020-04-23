<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestInvoice extends Mailable {
  use Queueable, SerializesModels;

  private $invoice;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($invoice) {
    $this->invoice = $invoice;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    return $this->subject('Request Invoice')
      ->view('email.request-invoice')
      ->with("vendorName", $this->invoice->vendorName)
      ->with("customerName",$this->invoice->customerName);
  }
}
