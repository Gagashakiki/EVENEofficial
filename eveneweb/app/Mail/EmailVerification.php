<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class EmailVerification extends Mailable {
  use Queueable, SerializesModels;

  private $user;
  private $username;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($user, $username) {
    $this->user = $user;
    $this->username = $username;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    $encryptedEmail = Crypt::encrypt($this->user->email);
    // ex: domain.com/verify?token=xxxx
    $link = route('signup.verify', ['token' => $encryptedEmail]);

    return $this->subject('Verify Your Email')
      ->with('link', $link)
      ->with('username', $this->username)
      ->view('email.signup');
  }
}
