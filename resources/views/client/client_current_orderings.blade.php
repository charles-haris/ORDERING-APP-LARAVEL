@extends("layout.master")

@section("content")
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>History of current orders</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           
                @forelse( $products as $product )

                <div class="templatemo-content-widget white-bg">
                    <center><h2 class="margin-bottom-10">Product - <span style="background-color: rgba(14, 14, 142, 0.38); padding:5px;">{{$product->type_product}}</span>  </h2></center>
                    <hr>
                    <p class="text-center text-uppercase">Product status : {{$product->status}} </p>
                    <center><button href="#" class="templatemo-edit-btn">Ordering Details</button></center> 
                    <hr>
                
                </div>
            @empty
                <div class="templatemo-content-widget white-bg">
                    <center><h2 class="margin-bottom-10">My History of current orders</h2></center>
                    <hr>
                    <p class="text-center text-uppercase">You have no current order</p>
                    <center><a href="{{route('order')}}"><button href="#" class="templatemo-edit-btn">New Order</button></a></center> 
                    <hr>
                
                </div>
            @endforelse
             

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>
@endsection