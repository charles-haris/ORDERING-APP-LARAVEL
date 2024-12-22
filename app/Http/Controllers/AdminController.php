<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Deliveryman;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    //methods to manage the client plateform as the admin

    public function allClient(){
        $clients = Client::all();
        return view("admin.users.list",compact("clients"));
    }
    //this method grants to block the client
    public function blockClient($id){
        $user = User::find($id);
        $user->block = 1;
        $user->save();
        return redirect()->back()->with('success_message','Client blocked!');
    }
    public function unblockClient($id){
        $user = User::find($id);
        $user->block = 0;
        $user->save();
        return redirect()->back()->with('success_message','Client unblocked!');

    }
    public function activateClient($id){
        $user = User::find($id);
        $user->Active = 1;
        $user->save();
        return redirect()->back()->with('success_message','Client account is activated!');
    }
    public function desactivateClient($id){
        $user = User::find($id);
        $user->Active = 0;
        $user->save();
        return redirect()->back()->with('success_message','Client account is desactivated!');
    }
    public function updateClient($id){
        $user = User::find($id);

        return view("",compact('user'));

    }

    //methods to manage the deliveryman plateform as the admin
    public function allDeliveryman(){
        $deliverymen = Deliveryman::all();
        return view("admin.deliverymen.list",compact("deliverymen"));
    }
    public function blockDeliveryman($id){
        $user = User::find($id);
        $user->block = 1;
        $user->save();
        return redirect()->back()->with('success_message','Deliveryman blocked!');
    }
    public function unblockDeliveryman($id){
        $user = User::find($id);
        $user->block = 0;
        $user->save();
        return redirect()->back()->with('success_message','Deliveryman unblocked!');
    }
    public function activateDeliveryman($id){
        $user = User::find($id);
        $user->Active = 1;
        $user->save();
        return redirect()->back()->with('success_message','Deliveryman account is activated!');
    }
    public function desactivateDeliveryman($id){
        $user = User::find($id);
        $user->Active = 0;
        $user->save();
        return redirect()->back()->with('success_message','Deliveryman account is desactivated!');
    }
    public function updateDeliveryman(){

    }

    //methods to manage the delivery  as the admin
    public function allProduct(){
        $products = Product::all();
        
        return view("admin.products.list",compact('products'));
    }
    public function detailProduct($id){
        $product = Product::find($id);
        
        return view("admin.products.detail",compact('product'));
    }
    public function updateProduct($id){
        $product = Product::find($id);
        
        return view("admin.products.list",compact('product'));
    }
    public function handleUpdateProduct(){
        $products = Product::all();
        
        return view("admin.products.list",compact('products'));
    }
   

}
