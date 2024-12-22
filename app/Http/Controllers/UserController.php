<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Deliveryman;
use Illuminate\Contracts\Session\Session;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\DB;



class UserController extends Controller
{
//this method get all the available users
    public function getAllUsers(){
        $user = User::all();
        return view();
    }
//this method grants to register

    public function registration(User $user,Request $request){
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $lastId = User::latest()->first()->id;
        if($request->type_of_user=="Client"){
            Client::create(["user_id"=>$lastId]);

        }else{
            Deliveryman::create(["user_id"=>$lastId]);
        }
       
        return redirect()->route('register')->with("success_message","Your account has been created successfully");
    }

    public function login(){
        return view("user.login");
    }

    public function register(){
        return view('user.create');
    }

    public function getConnected(Request $request){
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password]))
        {
            $client = Client::where('user_id','=',Auth::id())->get();
            $deliveryman = Deliveryman::where('user_id','=',Auth::id())->get();
            if($client->count()>0)
            {
                //return dd($client[0]->user->first_name);
                session()->regenerate();
                session()->put('profile_client','client');
                return redirect()->route("current_orderings")->with("success_message","User connected");
            }
            else
            {
                session()->put('profile_deliveryman', 'deliveryman');
                return redirect()->route("available_orders")->with('success_message','Deliveryman connected');
            }

        }
        else
        {
            return redirect()->back()->with("success_message","Email Or Password Incorrect");
        }
    }

    public function logout(){
        session()->forget('profile_client');
        session()->forget('profile_deliveryman');
        Auth::logout();
        return redirect()->route("login")->with("success_message","Your are disconnected");
    }

    public function update(Request $request,$id){

    }

    public function delete($id){

    }

    


}
