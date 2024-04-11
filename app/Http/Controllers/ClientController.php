<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function update(){
        $user = User::find(Auth::id());
        return view("client.update")->with('user',$user);
        
    }
    public function handleUpdate(Request $request){
        $user = User::find(Auth::id());
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $client = Client::find($user->client->id);
        $client->address = $request->address;
        $client->tel = $request->tel;
        $client->company = $request->company;
        $client->save();
        $user->save();
        return redirect()->route('dashboard_client')->with('success_message','Update successfully done!');
    }

    public function order(){
        $user = User::find(Auth::id());

        $client = Client::where("user_id",Auth::id())->get();
        //$user->client()->create(["company"=>"Google"]);
        
        return view("client.order")->with('clients',$client);

        //return dd($client);

    }

    public function handleOrdering(Request $request){
       $product = new Product();

       $product->type_product = $request->type_product;
       $product->weight = $request->weight;
       $product->departure_address = $request->departure_address;
       $product->destination_address = $request->destination_address;
       $product->description = $request->description;
       $product->client_id = $request->client_id;

       $product->save();
       return redirect()->back()->with("success_message","requirement of Ordering sent successfully !");

       //return $request->client_id;
    }

    public function my_orderings(){

        //client through the user
        $user = User::find(Auth::id());
        $user->client;
        //return dd($user->client->id);

        $products = Product::where('client_id','=',$user->client->id)->get();
        return view('client.my_orderings')->with("products",$products);

        /*
        user through the profile

        $profile = Profile::first();
        $profile->user->id;
        returns the user id through the profile*/

        

    }

    public function profile(){
        $user = User::find(Auth::id());
        
        return view("client.client_profile")->with("user",$user);
    }

    public function current_orderings(){
        $user = User::find(Auth::id());
        $client_id=$user->client->id;
        $products = Product::where("client_id","=",$client_id)
        ->where('status','<>','delivered')->get();
        return view('client.client_current_orderings')->with("products",$products); 

    }
}
