<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateVendor extends Mailable
{
    use Queueable, SerializesModels;
    private $dataVendor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataVendor)
    {
        $this->dataVendor = $dataVendor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
          ->subject('Payment Details')
          ->view('email.konfirmasi')->with('data',$this->dataVendor);
    }

}
