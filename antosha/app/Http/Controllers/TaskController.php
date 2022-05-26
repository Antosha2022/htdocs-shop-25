<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;


class TaskController extends Controller{

  public function FunctionCount( TaskRequest $naturnumber){
    // $task = new Task;
    // $task = {'naturnumber'} ;
    return {'naturnumber'};

  }

  // public function FunctionSubmit (ContactRequest $req) {
  //
  //   $contact=new Contact();
  //   $contact->name = $req->input('naturnumber');
  //   $contact->email = $req->input('email');
  //   $contact->subject = $req->input('subject');
  //   $contact->message = $req->input('message');
  //
  //
  //   $contact->save();
  //   return redirect()->route('home')->with ('success', 'Повідомлення було відправлено');
  //
  //
  // }

// public function FunctionCount(){
//   $nat = $_GET['naturnumber'];
//   if(trim($nat)=="")
//     echo "бажано ввести число";
//     else if ($nat >20)
//       echo "то число більше 20, не хочу рахувати";
//         else   {
//           echo "ви ввели число:".$nat."<br/><hr>";
//           echo "ряд натуральних чисел виходить такий:"."<br/>";
//     for($i=1; $i<=$nat;$i++)
//     echo $i."<br/>";
//     for($j=0; $j<=$nat;$j++)
//     $sum = $sum+$j;
//     for($ss=0; $ss<=$nat;$ss++)
//     $stup = $stup+($ss**2);
//           echo "<hr>сума дорівнює: ".$sum."<br/>";
//     echo "сума квадратів цих чисел дорівнює: ".$stup;
//     }

}
