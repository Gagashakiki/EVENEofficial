<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class VerifyEmail extends Mailable {
  use Queueable, SerializesModels;

  private $user;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($user) {
    $this->user = $user;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    // generate link
    $encryptedEmail = Crypt::encrypt($this->user->email);
    // ex: domain.com/verify?token=xxxx
    $link = route('signup.verify', ['token' => $encryptedEmail]);

    $username = $this->user->nama1 . " " . $this->user->nama2;
    if ($this->user->jenis == "vendor") {
      $username = $this->user->nama1;
    }

    return $this->subject('Verify Your Email')
      ->with('link', $link)
      ->with('username', $username)
      ->view('email.signup');
  }
}
