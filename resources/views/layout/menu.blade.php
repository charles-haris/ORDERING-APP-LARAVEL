<div class="templatemo-sidebar">
    <header class="templatemo-site-header">
      <div class="square"></div>
      <h1>APP-LIV</h1>
      <div class="square"></div>        
    </header>
       
    <!-- Search box -->
    
    <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
    </div>
    <nav class="templatemo-left-nav">          
       <ul>
        @if (session()->has('profile_deliveryman'))
          <li><a href="{{route('available_orders')}}" 
            @if (request()->routeIs('available_orders'))
            class="active"
            @endif
            ><i class="fa fa-home fa-fw"></i>Available Orders</a></li>
          <li><a href="{{route('recharge_credit')}}" 
            @if (request()->routeIs('recharge_credit'))
            class="active"
            @endif
            ><i class="fa fa-bar-chart fa-fw"></i>Recharge Credit</a></li>
            <li><a href="#" class=""><i class="fa fa-database fa-fw"></i>Laws and obligations</a></li>

          
        @endif

        @if (session()->has('profile_client'))
          <li><a href="{{route('current_orderings')}}" 
            @if (request()->routeIs('current_orderings'))
            class="active"
            @endif
            ><i class="fa fa-home fa-fw"></i>Current Orderings</a></li>
          <li><a href="{{route('my_orderings')}}"
            @if (request()->routeIs('my_orderings'))
            class="active"
            @endif
            ><i class="fa fa-bar-chart fa-fw"></i>History of orderings</a></li>
            <li><a href="#" class=""><i class="fa fa-database fa-fw"></i>Laws and obligations</a></li>

          
        @endif
        <li><a href="{{route('all_client')}}"><i class="fa fa-users fa-fw"></i>All clients</a></li>
        <li><a href="{{route('all_deliveryman')}}"><i class="fa fa-users fa-fw"></i>All deliverymen</a></li>
        <li><a href="{{route('all_product')}}"><i class="fa fa-database fa-fw"></i>Orders</a></li>

       
        <li><a href="#" class=""><i class="fa fa-money fa-fw"></i>Ordering fees</a></li>
        <li><a href="{{route('deconection')}}"><i class="fa fa-eject fa-fw"></i>Logout</a></li>
      </ul>  
    </nav>
  </div>