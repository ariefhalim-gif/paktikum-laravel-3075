<?php

namespace App\Http\Controllers;


use App\Models\Partner;
use Illuminate\Http\Request;



class PartnerController extends Controller
{


public function index()
{


$partners = Partner::all();


return view(
'admin.partners.index',
compact('partners')
);


}



public function store(Request $request)
{


$data=$request->validate([

'name'=>'required',

'logo_url'=>'required'

]);



Partner::create($data);



return redirect('/admin/partners');


}


}