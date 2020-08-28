@extends('layouts.app')

@section('content')


<style type="text/css">
    body {
    color: #f8f9fa;
}
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            
            <div class="card" style="background-color: rgba(52,144,220,.25); color: #dee2e6;" >
                <div class="card-header p-0 m-0"><b>List Fuel</b></div>

                

                <div class="card-body mb-5 mt-0">
                 <table class="table panel panel-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th> 
                                <th scope="col">Location</th> 
                                 
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data['fuels'] as $val)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{$val->fuel_name}}</td>
                                    <td>{{$val->fuel_price}}</td>
                                    <td>{{$val->location}}</td>
                                     
                                    
                                </tr>
                                 <?php $i++; ?>
                             @endforeach
                        </tbody>
                    </table>
                    {{ $data['fuels']->render() }}


                </div>
            </div>
        </div>
        <br>
            

            <div class = "row mt-2">
                <div class = "col-md-4 col-sm-6 p-5">
                    <h3 class ="title_home"><b>Fuel Rate</b></h3>
                    <div class = "thumbnail">
                        <a href="{{route('fuelquote.create')}}"><img src="fuelimage/img/rate.jpg"></a>
                    </div>              
                </div>
                <div class = "col-md-4 col-sm-6 p-5">
                    <h3 class ="title_home"><b>Profile</b></h3>
                    <div class = "thumbnail">
                        <a href="<?php if(isset( Auth::user()->id))echo  URL::route('user.editus', ['id' => Auth::user()->id]);else echo "login";?>"><img src="fuelimage/img/profile.jpg"></a>
                    </div>                  
                </div>
                <div class = "col-md-4 col-sm-6 p-5">
                    <h3 class ="title_home"><b>History</b></h3>
                    <div class = "thumbnail">
                        <a href="/Fuel5801/fuelquote"><img src="fuelimage/img/history.jpg"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 ">
                        <p></p>
                    </div>
                </div>
            </div>  

    </div>

</div>
@endsection
