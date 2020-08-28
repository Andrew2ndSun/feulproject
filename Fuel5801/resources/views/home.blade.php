@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
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
    </div>
</div>
@endsection
