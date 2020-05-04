<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstTimeMessage extends Mailable {
  use Queueable, SerializesModels;

  private $sender;
  private $receiver;
  private $data;

  /**
   * Create a new message instance.
   *
   * @param $sender
   * @param $receiver
   * @param $data
   */
  public function __construct($sender, $receiver, $data) {
    $this->sender = $sender;
    $this->receiver = $receiver;
    $this->data = $data;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    return $this->view('email.first-time-message')
      ->subject('New Message')
      ->with('sender', $this->sender)
      ->with('receiver', $this->receiver)
      ->with('data', $this->data);
  }
}
