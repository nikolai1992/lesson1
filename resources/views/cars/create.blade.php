@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <h2>Create car</h2>
        {!! Form::open(['url'=>route('cars.store'),'method'=>'POST']) !!}
        <div class="row">
            <label>Car name</label>
            <input name="name" class="form-control" value="">
        </div>
        <div class="row">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <input type="submit" value="Save" class="btn btn-success">
        <div class="row"></div>
        {{Form::close()}}
    </div>
@endsection
@section('script')
    <script>

    </script>
@endsection
