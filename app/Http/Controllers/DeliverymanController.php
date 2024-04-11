<?php

namespace App\Http\Controllers;

use App\Models\Deliveryman;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class  DeliverymanController extends Controller
{
    public function index(){
        $user = User::find(Auth::id());
        $orders = Product::where('status','=','undelivered')
        ->where("deliveryman_id","=",null)
        ->get();

        $order_takens = Product::where('status','=','Delivery going on')
        ->where('deliveryman_id','=',$user->deliveryman->id)
        ->get();
        if($order_takens->count()>0){
        $order_taken = $order_takens[0];
        }else{
            $order_taken = $order_takens;
        }
        return view('deliveryman.orderings_available',compact("orders","order_taken"));
    }

    public function update(){
        $user = User::find(Auth::id());
        $deliveryman = Deliveryman::find($user->deliveryman->id);
        return view('deliveryman.update')->with('deliveryman',$deliveryman);
    }

    public function profile(){
        $user = User::find(Auth::id());

        return view('deliveryman.deliveryman_profile')->with('user',$user);
    }

    

    public function handleUpdate(Request $request){
        $user = User::find(Auth::id());
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $deliveryman = Deliveryman::find($user->deliveryman->id);
        $deliveryman->address = $request->address;
        $deliveryman->tel = $request->tel;
        $deliveryman->vehicle = $request->vehicle;
        $deliveryman->save();
        $user->save();
        return redirect()->route('dashboard_deliveryman')->with('success_message','Update successfully done!');
    }

    public function historyDelivery(){
        $user = User::find(Auth::id());

        $my_deliveries=Product::where('deliveryman_id','=',$user->deliveryman->id)
        ->where("status",'=','delivered')->get();
        
        return view("deliveryman.deliveryman_history",compact('my_deliveries'));
    }

    public function rechargeMyAccount(){
        return view('deliveryman.deliveryman_credit');
    }

    public function takeAnOrder($id){
        $user = User::find(Auth::id());
        $status = "Delivery going on";
        $deliveryman_id = $user->deliveryman->id;

        $delivery = Product::find($id);
        $delivery->deliveryman_id = $deliveryman_id;
        $delivery->status = $status;
        $delivery->save();
        return redirect()->back()->with('success_message','Order taken for delivery');
    }

    public function deliverAnOrder($id){
        $delivery = Product::find($id);
        $delivery->status = "delivered"; 
        $delivery->save();
        return redirect()->back()->with('success_message','Delivery done successfully!');
    }

    public function test(Request $request){

        //$url = $request->fullUrl();

       
    }
}
