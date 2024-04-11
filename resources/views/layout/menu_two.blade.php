
      <div class="templatemo-top-nav-container">
        <div class="row">
          <nav class="templatemo-top-nav col-lg-12 col-md-12">
            <ul class="text-uppercase">
              @if(session()->has('profile_client'))

                <li><a href="{{route('dashboard_client')}}"
                  @if (request()->routeIs('dashboard_client'))
                  class="active"
                  @endif
                  >My profile</a></li>
                <li><a href="{{route('order')}}" 
                  @if (request()->routeIs('order'))
                  class="active"
                  @endif
                  >Order</a></li>
              @endif

              @if(session()->has('profile_deliveryman'))
              <li><a href="{{route('dashboard_deliveryman')}}" 
                @if (request()->routeIs('dashboard_deliveryman'))
                class="active"
                @endif
                >My profile</a></li>
              <li><a href="{{route('delivery_history')}}" 
                @if (request()->routeIs('delivery_history'))
                class="active"
                @endif
                >Delivery History</a></li>


              @endif

              @if(session()->has('profile_deliveryman'))

              @endif
            

              <li><a href="{{route('deconection')}}">Logout</a></li>

              
            </ul>  
          </nav> 
        </div>

      </div>
    