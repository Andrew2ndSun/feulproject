@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class='btn btn-primary' href="{{route('fuelquote.create')}}">Create Fuel quote</a>
            <div class="card">
                <div class="card-header">{{ __('List Fuel Quote') }}</div>
               
               <!--  @if(session('messenger'))
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i>    
                      {{session('messenger')}}   <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                @endif -->

                 
                 <table class="table panel panel-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fuel Name</th>
                                <th scope="col">Gallon request</th> 
                                <th scope="col">Suggest Price</th> 
                                <th scope="col">Total Amount Due</th> 
                                <th scope="col">Delivery date</th> 
                                <th scope="col">Address</th> 
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data['fuelquote'] as $val)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <?php 
                                    
                                        if(isset($val->Fuel->fuel_name)) 
                                            echo $val->Fuel->fuel_name;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($val->gallonrequest,2);?>
                                    </td>
                                    <td>
                                        <?php echo number_format($val->suggestprice,2);?>    
                                    </td>
                                    <td>
                                        <?php echo number_format($val->totalAmountDue,2);?>
                                    </td>
                                    <td>{{$val->deliverydate}}</td>
                                    <td>{{$val->streetname}} {{$val->city}} {{$val->state}} {{$val->zipcode}}</td>


                                     
                                    <td>
                                       <!--  <a href="{{ route('fuelquote.edit',[$val->quoteid])}}"><i class="material-icons">border_color</i></a>
                                        <a style='cursor: pointer;' onclick="deleteob({{$val->quoteid}})" ><i class="fa fa-trash"></i></a>
 -->
                                    </td>
                                </tr>
                                 <?php $i++; ?>
                             @endforeach
                        </tbody>
                    </table>
                    {{ $data['fuelquote']->render() }}
                 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deleteob(id){
        var r =confirm('Delete this information?');
        if(r){
            window.location="fuelquote/delete/"+id;
        }
    }
 

</script>
@endsection