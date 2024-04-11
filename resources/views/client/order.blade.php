@extends("layout.master")

@section("content")

<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <div class="templatemo-content-widget white-bg">

                <center><h1>Make An Order</h1></center>
                <hr>  
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">
                        {{session()->get('success_message')}}
                    </div>
                @endif
                <form class="row g-3" action="{{route('ordering')}}" method="POST">
                    @csrf
                    @method('POST')
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Type Of Product</label>
                          <input type="text" name="type_product" class="form-control" id="inputEmail4" placeholder="Type of product">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Weight</label>
                            <select id="inputState" name="weight" class="form-control" >
                              <option selected>Less than 1kg</option>
                              <option>between 1kg and 5kg</option>
                              <option>between 5kg and 15kg</option>
                              <option>between 15kg and 25kg</option>
                              <option>between 25kg and 35kg</option>
                              <option>between 35kg and 45kg</option>
      
                            </select>
                          </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Departure Address</label>
                          <input type="text" name="departure_address" class="form-control" id="inputPassword4" placeholder="Origine of the product">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Destination Address</label>
                          <input type="text" name="destination_address" class="form-control" id="inputAddress" placeholder="Destination of the product">
                        </div>
                    </div>
                     
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Description</label>
                      <input type="text" class="form-control" name="description" id="inputAddress2" placeholder="Describ the product to be sent">
                      @forelse ($clients as $client)
                      <input type="hidden" class="form-control" name="client_id" id="inputAddress2" value="{{$client->id}}" >
 
                      @empty
                          
                      @endforelse
                      
                    </div>
                    <br>
                    <div class="col-12 pt-3 text-center">

                      <button type="submit" class="btn btn-primary">Request an Order</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>

@endsection