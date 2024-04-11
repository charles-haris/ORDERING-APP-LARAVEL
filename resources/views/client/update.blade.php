@extends("layout.master")

@section("content")

<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <div class="templatemo-content-widget white-bg">

                <center><h1>Update My Info</h1></center>
                <hr>  
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">
                        {{session()->get('success_message')}}
                    </div>
                @endif
                <form class="row g-3" action="{{route('update_client')}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">First Name</label>
                          <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" id="inputEmail4" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Last Name</label>
                          <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" id="inputEmail4" placeholder="Last name">
                          </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                          <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputPassword4" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Tel</label>
                          <input type="text" name="tel" value="{{$user->client->tel}}" class="form-control" id="inputAddress" placeholder="076879423">
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Address</label>
                        <input type="text" name="address" value="{{$user->client->address}}" class="form-control" id="inputPassword4" placeholder="Address">
                      </div>
                      <div class="col-md-6">
                          <label for="inputAddress" class="form-label">Company Name</label>
                        <input type="text" name="company" value="{{$user->client->company}}" class="form-control" id="inputAddress" placeholder="Company">
                      </div>
                  </div>
                     
                   
                    <br>
                    <div class="col-12 pt-3 text-center">

                      <button type="submit" class="btn btn-primary">Update My info</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>

@endsection