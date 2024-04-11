@extends('layout.master')

@section('content')
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>All Orders</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           
              
                    

                        <div class="templatemo-content-widget white-bg" >
                            <center><h2 class="margin-bottom-10">Administration of orders</h2></center>
                            <hr>
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Description</th>
                                <th scope="col">client name</th>
                                <th scope="col">Deliveryman in charge</th>
                                <th scope="col">More + </th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)

                              <tr>
                                <th scope="row">PRO00{{$product->id}}</th>
                                <td>{{$product->product_type}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->client->user->first_name}}</td>
                                <td>
                                    @if ($product->deliveryman_id==null)
                                    <i>NONE</i>


                                    @else
                                    {{$product->deliveryman->user->first_name}}

                                    @endif
                                </td>
                                <td> <a href="{{url('/admin/product/'.$product->id.'/detail')}}"><button class="btn btn-primary">See +</button></a> </td>

                                
                              
                                
                              </tr>
                              @empty
                      
                              <hr>
                              <center><p>No delivery registered</p></center>
                              <hr>
                      
                      
                      @endforelse
                            </tbody>
                          </table>
                    
                        </div>
                   
                      
                
             

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>
@endsection