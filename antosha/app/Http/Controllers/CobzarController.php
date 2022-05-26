<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CobzarRequest;
use App\Models\Cobzar;

class CobzarController extends Controller
{
    public function FunctionSubmit (CobzarRequest $req)
    {
      $virsh = new Cobzar();
      $virsh->virsh =$req->input('virsh');
      $virsh->save();
      return redirect()->route('home')->with ('success', 'Вірш було відправлено');
    }

    public function FunctionAllVirshi(){
    // можна подивитись повний масив
    //   dd(Contact::all());
    return view('CobzarVirshi',['data'=>Cobzar::all()]);
    }

     public function FunctionShowOneVirsh($id){
       $virsh=new Cobzar;
       return view('one-virsh',['data'=>$virsh->find($id)]);
     }

     public function FunctionUpdateVirsh($id){
       $virsh=new Cobzar;
       return view('cobzar-update-virsh',['data'=>$virsh->find($id)]);
     }

     public function FunctionUpdateVirshSubmit ($id, CobzarRequest $req) {

       $virsh=Cobzar::find($id);
       $virsh->virsh = $req->input('virsh');

       $virsh->save();
       return redirect()->route('one-virsh',$id)->with ('success', 'Вірш було оновлено');
     }

     public function FunctionDeleteVirsh($id){
       Cobzar::find($id)->delete();
       return redirect()->route('cobzar')->with ('success', 'Вірш було видалено');
     }


     // public function FunctionRandomVirsh(){
     //    $virsh=new Cobzar;
     //    return view('virsh', ['one' => $virsh->inRandomOrder()->first()]);
     // }


}
