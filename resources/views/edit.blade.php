@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')

    <form action="{{url('/update')}}/{{$todos->id}}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">todo name</label>
            <input type="text" class="form-control" name="" value="{{$todos->name}}">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" rows="3">{{$todos->description}}</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    </form>

@endsection