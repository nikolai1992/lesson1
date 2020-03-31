@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <h2>Edit car type</h2>
        {!! Form::open(['url'=>route('car_types.update', $model->id),'method'=>'patch']) !!}
        <div class="row">
            <label>Name</label>
            <input name="name" class="form-control" value="{{$model->name}}">
        </div>
        <input type="submit" value="Save" class="btn btn-success">
        {{Form::close()}}
    </div>
@endsection