@extends('layouts.app')
@section('content')
    
    <div class="card col-2" style="width: 18rem;">
        <img src="{{ $show->url }} " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $show->name }} </h5>
            <p class="card-text">{{ $show->amount }} </p>
            <form action="/delete/{{ $show->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="submit" href="/show/{{$show->id}} " class="btn btn-primary">Go somewhere</a>
        </div>
@endsection