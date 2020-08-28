@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CREATE FUEL QUOTE') }}</div>
               
                @if(session('messenger'))
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i>    
                      {{session('messenger')}}   <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                @endif

                <div class="card-body">
                    <form   action="{{ route('fuelquote.store')}}"   accept-charset="UTF-8" method="POST" enctype="multipart/form-data">
                         @csrf
                    
                          <div class="form-group row">

                            <label for="fuel_id" class="col-md-4 col-form-label text-md-right">{{ __('SELECT FUEL') }}</label>

                            <div class="col-md-6">
                                


                                <select id="fuel_id" onchange="capnhatprice()"  name="fuel_id" class="form-control{{ $errors->has('fuel_id') ? ' is-invalid' : '' }}"  required >

                                    @if(count($data['fuels'])>1)
                                        <option value="">Choose...</option>
                                    @endif

                                    @foreach($data['fuels'] as $val)
                                        <option value="{{$val->fuel_id}}">{{$val->fuel_name}}</option>
                                    @endforeach

                                </select>



                                 @if ($errors->has('fuelid')) 
                                    <p class='plgalert'>{{ $errors->first('fuel_id') }}</p>
                                  @endif
                            </div>
                            @foreach($data['fuels'] as $val)
                             <input type="hidden" id="price{{$val->fuel_id}}" value='{{$val->fuel_price}}'/>
                             @endforeach
                          </div>

                         <div class="form-group row">
                            <label for="gallonrequest"  class="col-md-4 col-form-label text-md-right">{{ __('Gallon Request') }}</label>

                            <div class="col-md-6">
                                <input id="gallonrequest" onkeyup="capnhatprice()"  type="text" class="form-control @error('gallonrequest') is-invalid @enderror" name="gallonrequest" value="{{$data['fuelquote']['gallonrequest']}}" required autocomplete="gallonrequest" autofocus>

                                @error('gallonrequest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         
                         <div class="form-group row">
                            <label for="deliverydate" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Date') }}</label>

                            <div class="col-md-6">
                                <input id="deliverydate" type="date" class="form-control @error('deliverydate') is-invalid @enderror" name="deliverydate" value="{{$data['fuelquote']['deliverydate']}}" required autocomplete="deliverydate" autofocus>

                                @error('deliverydate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="streetname" class="col-md-4 col-form-label text-md-right">{{ __('Street Name') }}</label>

                            <div class="col-md-6">
                                <input disabled id="streetname" type="text" class="form-control @error('streetname') is-invalid @enderror" name="streetname" value="{{$data['fuelquote']['streetname']}}" required autocomplete="streetname" autofocus>

                                @error('streetname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input disabled id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$data['fuelquote']['city']}}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                
                                <?php
                                $state=array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
                                ?>
                                <select  disabled onchange="capnhatprice()" id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{$data['fuelquote']['state']}}" required autocomplete="state" autofocus>
                                    <?php foreach($state as $val){ ?>
                                    <option value="{{$val}}"
                                    <?php if($val==$data['fuelquote']['state']) echo "selected"; ?>
                                    >{{$val}}</option>
                                    <?php } ?>
                                    
                                </select>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Zipcode') }}</label>

                            <div class="col-md-6">
                                <input disabled id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{$data['fuelquote']['zipcode']}}" required autocomplete="zipcode" autofocus>

                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="suggestprice" class="col-md-4 col-form-label text-md-right">{{ __('Suggest Price') }}($)</label>

                            <div class="col-md-6">
                                <input disabled id="suggestprice" type="text" class="form-control @error('suggestprice') is-invalid @enderror" name="suggestprice" value="{{$data['fuelquote']['suggestprice']}}" required autocomplete="suggestprice" autofocus>

                                @error('suggestprice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                         <div class="form-group row">
                            <label for="totalAmountDue" class="col-md-4 col-form-label text-md-right">{{ __('Total Amount Due') }}($)</label>

                            <div class="col-md-6">
                                <input id='buy' type="hidden" value="{{$data['buy']}}" />
                                <input disabled id="totalAmountDue" type="text" class="form-control @error('totalAmountDue') is-invalid @enderror" name="totalAmountDue" value="{{$data['fuelquote']['totalAmountDue']}}" required autocomplete="totalAmountDue" autofocus>

                                @error('totalAmountDue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function capnhatprice(){
        //alert($("#state").val());
        // alert($("#fuel_id").val());
       // alert($("#gallonrequest").val());
        //suggestedprice/1 gallon=1.50+[0.02(0.04)-0.01(0)+0.02(0.03)+0.1+0.04(0.03)]*price_fuel



        var pstate,pmonth=0,pgalon,sgprice;
        if($("#state").val()=="Texas") pstate=0.02;
        else  pstate=0.04;

        console.log("pstate"+pstate);
        //------$("#buy").val()
        var d = new Date();
        if(d.getMonth()>=3 && d.getMonth()<=5) pmonth=0.04;
        else pmonth=0.03;


        if($("#gallonrequest").val()>=1000) pgalon=0.02;
        else pgalon=0.03;
        //-------
        sgprice=1.5+(pstate-$("#buy").val()+pgalon+0.1+pmonth)*1.5;
        sgprice=sgprice.toFixed(2);
        
        if(pmonth>0 && $("#gallonrequest").val()>0){
            $("#suggestprice").val(sgprice);
            $("#totalAmountDue").val(sgprice*$("#gallonrequest").val());
        }

        //suggestprice
        //totalAmountDue

    }
</script>
@endsection