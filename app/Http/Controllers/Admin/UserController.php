<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Money;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return View('admin.user.index', compact('users'));
  }
  public function rechargeMoney(Request $request){
      if($request->ajax()){
        $data=$request->all();
        if(isset($data['money'])){
            $user=User::find($data['user_id']);
            $user->update(['money'=>$user['money']+($data['money']*Money::first()->coin)/Money::first()->money]);
            History::create(['user_id'=>$data['user_id'], 'money'=>$data['money'], 'coin'=>($data['money']*Money::first()->coin)/Money::first()->money]);
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
      }
  }
}
