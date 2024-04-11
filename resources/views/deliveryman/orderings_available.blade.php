@extends("layout.master")

@section("content")

<style>
    span{
        font-weight: 600;
    }
    .image{
        width: 35%;
        height: 100%;
        display:flex;
        position: relative;
        float: left;
    }
    p{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 400;
    }
    .profile_img{
        max-width: 210px;
        margin: 0px auto;

    }
    .info{
        width: 65%;
        height: 100%;
        color: rgba(20, 19, 20, 0.253);
        display:flex;
        position: relative;
        float: left;


    }
</style>
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>Orders available</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           

                <div class="templatemo-content-widget white-bg">
                    

                    @if ($order_taken->count()>0)
                    <p class=" text-uppercase text-center">Order ID: ORD000{{$order_taken->id}} </span></p>

                    <div class="templatemo-content-widget white-bg">

                        <div class="image">
                            <img class="profile_img" src="{{asset('images/Delivery-Scooter-PNG-Cutout.png')}}" alt="">
                        </div>
                        <div class="info"> &nbsp; <!--&#128512;-->	
                            <i>Current delivery</i></div>
                        <hr>
                        
                        <p class=" text-uppercase">Sender's Name : <span>{{$order_taken->client->user->first_name}} {{$order_taken->client->user->last_name}}</span>  </p>
                        <p class=" text-uppercase">Product Type : <span>{{$order_taken->type_product}} </p>

                        <p class=" text-uppercase">Description of the product : <span>{{$order_taken->description}}</span>    </p>
                        <p class=" text-uppercase">status of the delivery : <span class="text-danger">{{$order_taken->status}}</span>    </p>                    
                        <p class=" text-uppercase">departure : <span>{{$order_taken->departure_address}}</span>  </p>
                        <p class=" text-uppercase">destination : <span>{{$order_taken->destination_address}}</span>  </p>
                        <hr>
                        
                        <center><a href="{{url('deliveryman/deliverOrder/'.$order_taken->id)}}" > <button class="btn btn-primary"> Delivery done</button></a></center>
                    
                    </div>
                        
                    @else
                        
                    <table class="table text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" class="text-center">Product To Deliver</th>
                            <th scope="col" class="text-center">More Details On The Command</th>
                            <th scope="col" class="text-center">Take Command</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr>
                                <td>{{$order->type_product}}</td>
                                <td><button class="btn btn-primary" onclick="call()"><i class="fa fa-eye" aria-hidden="true"></i> See details</button></td>
                                <td ><a href="{{url('deliveryman/takeOrder/'.$order->id)}}"><button  class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a></td>

                              </tr>    
                            @empty
                                <p class="text-center text-uppercase">You have no current order</p>
                            @endforelse
                       
                        </tbody>
                      </table>
                      @endif

                    
                
                </div>
           
             

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>


@endsection