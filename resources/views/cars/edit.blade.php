@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <h2>Edit car</h2>
        {!! Form::model($model,['url'=>route('cars.update', $model->id),'method'=>'PATCH']) !!}
               <div class="row">
                   <label>Car name</label>
                   <input name="name" class="form-control" value="{{$model->name}}">
               </div>
               <div class="row">
                   <label>Description</label>
                   <textarea class="form-control" name="description">{{$model->description}}</textarea>
               </div>
               <input type="submit" value="Save" class="btn btn-success">
               <div class="row"></div>
        {{Form::close()}}
    </div>
@endsection
