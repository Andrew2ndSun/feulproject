@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class='btn btn-primary' href="{{route('fuel.create')}}">Create Fuel</a>
            <div class="card">
                <div class="card-header">{{ __('List Fuel') }}</div>
               
                @if(session('messenger'))
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i>    
                      {{session('messenger')}}   <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                @endif

                

                 
                 <table class="table panel panel-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th> 
                                <th scope="col">Location</th> 
                                <th scope="col" style='width:1%'>Action</th>
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
                                     
                                    <td>
                                        <a href="{{ route('fuel.edit',[$val->fuel_id])}}"><i class="material-icons">border_color</i></a>
                                        <a style='cursor: pointer;' onclick="deleteob({{$val->fuel_id}})" ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                 <?php $i++; ?>
                             @endforeach
                        </tbody>
                    </table>
                    {{ $data['fuels']->render() }}
                 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deleteob(id){
        var r =confirm('Delete this information?');
        if(r){
            window.location="fuel/delete/"+id;
        }
    }
 

</script>
@endsection
