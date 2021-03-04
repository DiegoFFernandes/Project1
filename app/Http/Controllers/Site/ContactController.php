<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Jobs\SendMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{

 public function index(Request $request)
 {
  $validadeData = $this->_validate($request);
  $contact      = Contact::create($validadeData);
  $this::enviar_email($contact);
  return redirect()->route('site.contact')->with('message', 'Mensagem enviada com sucesso!');
 }

 public static function enviar_email(Contact $contact)
 {
  return SendMail::dispatch($contact)->delay(now()->addSecond('5'));
 }

 public function create()
 {
  //
 }

 public function store(Request $request)
 {
  //
 }

 public function show($id)
 {
  
 }

 public function edit($id)
 {
  //
 }

 public function update(Request $request, $id)
 {
  //
 }

 public function destroy($id)
 {
  //
 }

 public function _validate(Request $request)
 {
  return $request->validate([
   'name'        => 'required|max:255',
   'email'       => 'required|email',
   'phone'       => 'required',
   'subject'     => 'required|in:1,2,3,4,5',
   'description' => 'max:255',
  ],
   [
    'name.required'  => 'Por favor informe um nome.',
    'phone.required' => 'Por favor informe um telefone.',
    'email.required' => 'Por favor informe um e-mail valido.',
   ]);
 }
}