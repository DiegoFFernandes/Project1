<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ServicesSite;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
 public $resposta;
 public $user;

 public function __construct(Request $request)
 {
  $this->resposta = $request;

  $this->middleware(function ($request, $next) {
   $this->user = Auth::user();
   return $next($request);
  });

 }

 public function index()
 {
  $user = Auth::user();

  $uri      = $this->resposta->route()->uri();
  $exploder = explode('/', $uri);
  $uriAtual = ucfirst($exploder[1]);
  $servicesResumo = ServicesSite::where('position_site',1)->get();
  $servicesOurServices = ServicesSite::where('position_site',2)->get();
  return view('admin.services-list', compact('user', 'uriAtual', 'servicesResumo','servicesOurServices'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  //
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  //
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
  $service = ServicesSite::findOrFail($id);
  $user    = $this->user;
  return view('admin.services-edit', compact('service', 'user'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {

  $service = ServicesSite::findOrFail($id);

  $data = $this->_validate($request);
  
  $data['description'] = $this->ConvertData($request->description);


  $service->fill($data);

  $service->save();
  return redirect()->route('servicos.index')->with('status', "Atualizado com sucesso!");

 }

 public function ConvertData($body_content)
 {
  $body_content = trim($body_content);
  $body_content = stripslashes($body_content);
  $body_content = htmlspecialchars($body_content);
  return $body_content;
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id)
 {
  //
 }
 protected function _validate(Request $request)
 {
  return $request->validate([
   'description' => "required",
  ]);

 }
}
