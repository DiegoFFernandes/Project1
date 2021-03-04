<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
 use Queueable, SerializesModels;

 public $contact;
 public $data;

 public function __construct(Contact $contact)
 {
  $this->contact = $contact;
  date_default_timezone_set('America/Sao_Paulo');
  $dataLocal  = date('d/m/Y H:i:s', time());
  $this->data = $dataLocal;
 }

 /**
  * Build the message.
  *
  * @return $this
  */
 public function build()
 {
  $this->to('contato@lutogrupomaximo.com.br');
  $this->subject('Contato');
  return $this->markdown('site.mail.send_contact');
 }
}