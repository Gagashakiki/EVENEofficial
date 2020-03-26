<?php

namespace App\Http\Controllers\Client;

use App\user;
use Crypt;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use session;

class Konfirmasi extends Mailable
{
    use Queueable, SerializesModels;
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
  //  public function __construct(User $user)
  //  {
      //  $this->user = $user;
  //  }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // generate link
        $datas=session::get('datavem');
        Session::forget('datavem');
        return $this->subject('Payment Details')
            ->view('email.konfirmasi')->with('data',$datas);
    }

}
