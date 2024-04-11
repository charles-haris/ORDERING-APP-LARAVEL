@include('layout.header')
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      @include('layout.menu') 
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">

        @include('layout.menu_two')
        @yield('content')
        @include('layout.footer')

  </div>
</div>
    <!-- JS -->
    <script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script>

     

    </script>
    
    <script type="text/javascript" src="{{asset('js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->
  </body>
</html>