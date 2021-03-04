<?php

namespace App\Jobs;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use stdClass;

class SendMail implements ShouldQueue
{
 use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

 public $tries = 2;
 public $contact;

 public function __construct(Contact $contact)
 {
  $this->contact = $contact;
 }

 /**
  * Execute the job.
  *
  * @return void
  */
 public function handle()
 {
  \Illuminate\Support\Facades\Mail::queue(new \App\Mail\SendMail($this->contact));
 }
}