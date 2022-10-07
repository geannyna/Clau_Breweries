<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;
    public string $name;
    public string $email;
    public string $body;
    public string $webSubject; // no se puede poner subject porque da error
   
    public function __construct(string $name,string $email,string $subject,string $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->webSubject = $subject;
        $this->body = $body; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('claudia.iacob@hotmail.com', 'claudia')->subject('Contacto desde la web')->markdown('emails.webcontact');
        //return $this->view('view.name');
    }
}
