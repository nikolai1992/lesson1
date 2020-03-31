@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <h2>Create a new car type</h2>
        {!! Form::open(['url'=>route('car_types.store'),'method'=>'POST']) !!}
        <div class="row">
            <label>Name</label>
            <input name="name" class="form-control" value="">
        </div>
        <input type="submit" value="Save" class="btn btn-success">
        {{Form::close()}}
    </div>
@endsection