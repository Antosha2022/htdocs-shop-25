<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
// use App\Policies\ProductPolicy;
// use App\Http\Requests\ProductRequest;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  // public function ProductShop(){
  //     // return view for product id=2
  //     $product=new Product;
  //     return view('bookkeeper.product-shop',['data'=>$product->find(2)]);
  //    }

  public function addNewClient(){
      return view('bookkeeper.client');
  }

  public function FunctionAllData(){
  // можна подивитись повний масив
  //   dd(Contact::all());
    // return view('bookkeeper.productList',['data'=>Product::all()]);
      $client=new Client;
  return view('bookkeeper.clientList',['data'=>$client->orderBy('updated_at','desc')->get()]);
  }



  /**
   * Display the specified resource.
   *
   * @param  \App\Client  $product
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $client=new Client;
    return view('bookkeeper.one-client',['data'=>$client->find($id)]);
  }


  /**
   * Store a newly created resource in storage.
   * створення нового продукту
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $req){
    $validation = $req->validate([
      'name'=>'required',
      'edrpou_code'=>'required',

    ]);
    $client=new Client();
    $client->short_name = $req->input('name');
    $client->edrpou_code = $req->input('edrpou_code');
    $client->ipn_code = $req->input('ipn_code');
    $client->zip_code = $req->input('zip_code');
    $client->city = $req->input('city');
    $client->contract_number = $req->input('contract_number');
    $client->rcontract_date = $req->input('contract_date');
    $client->chipping_address = $req->input('chipping_address');

    $product->save();
    return redirect()->route('client-data')->with('success','Клієнт доданий в базу даних');

     // dd($req);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Client  $product
   * @return \Illuminate\Http\Response
   */
  public function updateClient($id){
    $client=Client::find($id);
    return view('bookkeeper.update-client',['data'=>$client->find($id)]);
  }


  public function editClientSubmit($id, Request $req) {
    $validation = $req->validate([
      'name'=>'required',
      'edrpou_code'=>'required'
    ]);

    $client=new Client();
    $client->short_name = $req->input('name');
    $client->edrpou_code = $req->input('edrpou_code');
    $client->ipn_code = $req->input('ipn_code');
    $client->zip_code = $req->input('zip_code');
    $client->city = $req->input('city');
    $client->contract_number = $req->input('contract_number');
    $client->rcontract_date = $req->input('contract_date');
    $client->chipping_address = $req->input('chipping_address');

    $client->save();
    return redirect()->route('client-data',$id)
    ->with('success','Інформація про клієнта успішно оновлена');
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Client  $product
   * @return \Illuminate\Http\Response
   */
  public function destroyClient($id){
    Client::find($id)->delete();
    return redirect()->route('client-data');
  }
}
