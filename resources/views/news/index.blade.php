@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <a href="{{route('articles.create')}}" style="float: right" class="btn btn-primary">Add new</a>
            <div class="title m-b-md">
                News
            </div>
            <table>
                <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Short description
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>

                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>{{$car->name}}</td>
                        <td>{{$car->short_description}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('articles.edit', $new->id)}}">Edit</a>
                            {{Form::open(['route'=>['articles.destroy', $new->id], 'method'=>'delete'])}}
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