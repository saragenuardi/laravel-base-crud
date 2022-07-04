@extends('layouts.app')

@section('main_content')
<div class="container">
    <h3> {{$selected_comic->title}} </h3>
    <p> {{$selected_comic->description}}</p>
    <img src="{{ $selected_comic->thumb}}">
    <h4> {{ $selected_comic->price}} </h4>
    <p> {{ $selected_comic->sale_date}}</p>
    <h5>
        {{ $selected_comic->type}}
    </h5>
    <p>{{ $selected_comic->created_at}}</p>
    <p> {{ $selected_comic->updated_at}}</p>
    <a class="btn btn-primary" href="{{ route('comic.edit', ['comic' => $comic->id ])}}"> Modifica</a>
</div>
    
@endsection