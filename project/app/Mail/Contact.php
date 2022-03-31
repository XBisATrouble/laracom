<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $userMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $userMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->userMessage = $userMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->with(['name'=>$this->name, 'email'=>$this->email, 'userMessage'=>$this->userMessage]);
    }
}
