@extends("layout.master")

@section("content")
<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>Profile User</h1></center>
                <hr>            
             @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
             @endif


                <div class="templatemo-content-widget white-bg">

                    <div class="image">
                        <img class="profile_img" src="{{asset('images/avatar-account-icon-default-social-media-profile-photo-vector.jpg')}}" alt="">
                    </div>
                    <div class="info"> &nbsp; <!--&#128512;-->	
                        <i>My information</i></div>
                    <hr>

                    <p class=" text-uppercase">First Name : <span>{{$user->first_name}}</span>  </p>
                    <p class=" text-uppercase">Last Name : <span>{{$user->last_name}}</span>    </p>
                    <p class=" text-uppercase">Email : <span>{{$user->email}}</span>    </p>                    
                    <p class=" text-uppercase">Company : <span>{{$user->client->company}}</span></p>
                    <p class=" text-uppercase">Address : <span>{{$user->client->address}}</span>  </p>
                    <p class=" text-uppercase">Tel : <span>{{$user->client->tel}}</span>  </p>
                    <hr>

                    <center> <a href="{{route('update')}}" class="btn btn-success">Updade</a> </center>
                
                </div>

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>

<style>
    span{
        font-weight: 600;
    }
    .image{
        width: 45%;
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
        max-width: 220px;
        margin: 0px auto;

    }
    .info{
        width: 55%;
        height: 100%;
        color: rgba(20, 19, 20, 0.253);
        display:flex;
        position: relative;
        float: left;


    }
</style>
@endsection