@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <a href="{{route('car_types.create')}}" style="float: right" class="btn btn-primary">Add new</a>
            <div class="title m-b-md">
                Car types
            </div>
            <table class="table-bordered">
                <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>

                </thead>
                <tbody>
                @foreach($car_types as $car_type)
                    <tr>
                        <td>{{$car_type->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('car_types.edit', $car_type->id)}}">Edit</a>
                            {{Form::open(['route'=>['car_types.destroy', $car_type->id], 'method'=>'delete'])}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            {{Form::close()}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection