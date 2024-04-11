@extends('layout.master')

@section('content')
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>All Deliverymen</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           
              
                    

                        <div class="templatemo-content-widget white-bg">
                            <center><h2 class="margin-bottom-10">Administration of deliverymen</h2></center>
                            <hr>
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Update</th>
                                <th scope="col">Block / Unblock</th>
                                <th scope="col">Activate / Desactivate</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($deliverymen as $deliveryman)

                              <tr>
                                <th scope="row">DEL00{{$deliveryman->id}}</th>
                                <td>{{$deliveryman->user->first_name}}</td>
                                <td>{{$deliveryman->user->last_name}}</td>
                                <td> <a href="{{url('/admin/deliveryman/'.$deliveryman->user->id.'/update')}}"><button class="btn btn-primary">Update</button></a> </td>

                                <td> <a href="
                                  @if ($deliveryman->user->block == 0)
                                  {{url('/admin/deliveryman/'.$deliveryman->user->id.'/block')}}

                                  @else
                                  {{url('/admin/deliveryman/'.$deliveryman->user->id.'/unblock')}}

                                  @endif
                                  
                                  ">
                                    @if ($deliveryman->user->block == 0)
                                    <button class="btn btn-danger"> Block  </button>
                                    @else
                                    <button class="btn btn-primary"> Unblock </button>
                                    @endif
                                  </a> </td>
                                <td> <a href="
                                  @if ($deliveryman->user->Active == 0)
                                  {{url('/admin/deliveryman/'.$deliveryman->user->id.'/activate')}}

                                  @else
                                  {{url('/admin/deliveryman/'.$deliveryman->user->id.'/desactivate')}}

                                  @endif
                                  
                                  ">
                                    @if ($deliveryman->user->Active == 0)
                                    <button class="btn btn-primary"> Activate  </button>
                                    @else
                                    <button class="btn btn-danger"> Desactivate  </button>
                                    @endif  
                                  
                                  </a>  </td>
                                
                              </tr>
                              @empty
                      
                              <hr>
                              <center><p>No deliveryman registered</p></center>
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