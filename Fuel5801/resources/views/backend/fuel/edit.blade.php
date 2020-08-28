@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT FUEL') }}</div>
               
                @if(session('messenger'))
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i>    
                      {{session('messenger')}}   <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                @endif

                <div class="card-body">
                    <form   action="{{ route('fuel.update',[$data['fuel']->fuel_id])}}"   accept-charset="UTF-8" method="POST" enctype="multipart/form-data">
                         {{ method_field('PUT') }}{{csrf_field()}}

                        <div class="form-group row">
                            <label for="fuel_name" class="col-md-4 col-form-label text-md-right">{{ __('Fuelname') }}</label>

                            <div class="col-md-6">
                                <input id="fuel_name" type="text" class="form-control @error('fuel_name') is-invalid @enderror" name="fuel_name" value="{{$data['fuel']['fuel_name']}}" required autocomplete="fuel_name" autofocus>

                                @error('fuel_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuel_price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="fuel_price" type="text" class="form-control @error('fuel_price') is-invalid @enderror" name="fuel_price" value="{{$data['fuel']['fuel_price']}}" required autocomplete="fuel_price" autofocus>

                                @error('fuel_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{$data['fuel']['location']}}" required autocomplete="location" autofocus>

                                @error('location')
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
<script type="text/javascript">
    
    
    $(document).ready(function(){
      $("#fuel_price").keypress(function(){
         var str=$("#fuel_price").val()// lay gai trị input 
         var res = str.replace("$", "");// bỏ dau $
         $("#fuel_price").val("$"+res);
      });
    });

</script>
@endsection
