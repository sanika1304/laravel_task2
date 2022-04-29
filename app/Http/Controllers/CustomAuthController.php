<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class CustomAuthController extends Controller
{
    function addData(Request $req){


      
        $req->validate
        ([
            'name'=>'required|regex:/^[a-zA-z\s]*$/', 
            'password'=>'required|min:6|max:8',
        ]);
        


        
       
    
        $user=new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->contact=$req->contact;
        //  $user->save();
        // return redirect('register')->with('message','You have successfully registered!');




         $check=User::where([
            ['email','=',$req->email],
             ])->first();
            if($check){
                         return redirect('register')->with('emailerrormessage','Register Failed ! Email already exists.');
            
                    }
                    {
                        $user->save();
                        return redirect('register')->with('message', 'You have successfully registered!');
            
                    }

 
         






        //  $req->validate([
            //   'name'=>'required|regex:/^[a-zA-z\s]*$/',
        //    'email'=> 'required|string|email|max:255|unique:user',
        //     'password'=>[
        //         'required', 'int', 'confirmed', 
        //      Password::min(6)->numbers],
         //    ]);


       
      

    }
 




    function login(Request $req){
$check=User::where([
    ['email','=', $req->email],
    ['password','=', $req->password]
])->first();
if ($check){
    return redirect('/addlogin');
}
return redirect ('/login')->with('logmessage','Incorrect Email or Password'  );


$req->validate([

    'name'=>'required|regex:/^[a-zA-z\s]*$/',
]);

    }










}

