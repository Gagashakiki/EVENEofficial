<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Quotation;
use Auth;
use Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Crypt;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

      class authcontroller extends controller{

        public function login(Request $request){
          $email=$request->email;
          $pass =$request->pass;
          $users=db::select("call dataadmin('$email')");
          if($users==null){
               return redirect()->back()->with('failed','Username/Password salah atau tidak terdaftar');
            }
    else{
        //  $data = db::select("call dataadmin('$email')");
          $data = $users[0];
        //  dd($data);
        //  $data1 = $data::where('username',$email)->first();
        //    if($data1){ //apakah email tersebut ada atau tidak
                if(Hash::check($pass,$data->password)){
              //    $users=db::select("call dataadmin('$request->email')");
                  session::put('profiladmin',$users);
                  return redirect('/admin/dashboard');
        }
        else{
           return redirect()->back()->with('failed','Username/Password salah atau tidak terdaftar');
        }

    }
  }
      public function logout(){
        if(session::get('profiladmin')){
        session::forget('profiladmin');
          return redirect('admin/login');
      }
      else{
        return redirect('admin/login');
      }
    }
}
