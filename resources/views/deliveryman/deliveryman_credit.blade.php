@extends('layout.master')

@section('content')

<div class="container">
   
    <div class="row pt-5">
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-10" style="margin-top: 4%">
              
            
            <div class="container-fluid">
                <center><h1>Recharge My Account</h1></center>
                <hr> 
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-center">{{session()->get('success_message')}}</div>
                @endif           
              
                    <div class="templatemo-content-widget white-bg" style="height:45vh">
                        <center><h2 class="margin-bottom-10">Select One option</h2></center>
                        <hr>
                        <section class="means">
                            <a href="#">
                                <div class="mean_transfert">
                                    <img src="{{asset('images/mastercard.png')}}" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="mean_transfert">
                                    <img src="{{asset('images/paypal.png')}}" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="mean_transfert">
                                    <img src="{{asset('images/mobile_money.png')}}" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="mean_transfert">
                                    <img src="{{asset('images/visa.png')}}" alt="">
                                </div>
                            </a>
    

                        </section>
                        
                    
                    </div>
                
             

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>

<style>
    .mean_transfert{
        margin: 10px;
        width: 150px;
        height: 150px;
        background-color: aliceblue;
        border: 1px solid aliceblue;
        border-radius: 10px;
        display: flex;
        align-items: center;
        float: left;
        margin: 0px 8px;
        
    }

    .mean_transfert img{
        max-width: 120px;
        margin: auto;
    }
    .mean_transfert:hover{
        cursor: pointer;
        border:1px solid #1919FF;
        border-radius: 10px;
        background-color: transparent;
    }
</style>
@endsection