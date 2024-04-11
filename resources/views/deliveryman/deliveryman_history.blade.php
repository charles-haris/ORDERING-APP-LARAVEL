@extends("layout.master")

@section("content")
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>History of my deliveries</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           
                @forelse( $my_deliveries as $my_delivery )

                    <div class="templatemo-content-widget white-bg">
                        <center><h2 class="margin-bottom-10">Product : <span style="background-color: rgba(45, 182, 47, 0.38); padding:5px;">{{$my_delivery->type_product}}</span>  </h2></center>
                        <hr>
                        <p class="text-center text-uppercase">Product status : {{$my_delivery->status}} </p>
                        
                    
                    </div>
                @empty
                    <div class="templatemo-content-widget white-bg">
                        <center><h2 class="margin-bottom-10">History of My deliveries</h2></center>
                        <hr>
                        <p class="text-center text-uppercase">No record of delivery done</p>
                        <hr>
                    
                    </div>
                @endforelse
             

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>
@endsection