@extends('layouts.app')


@section('main_content')
    <h1>Lista Fumetti</h1>
    <ul>
        @foreach ($comic_list as $comic)
            <li>
                <h3>
                    <a href="{{ route('comic.show', ['comic' => $comic->id] )}}">
                    {{ $comic->title }}
                    </a>
                </h3>
                {{-- <p>
                    {{ $comic->description }}
                </p> --}}
                <img src="{{ $comic->thumb }}">
                <h4>
                    {{ $comic->price }}
                </h4>
                <p>
                    {{ $comic->series }}
                </p>
                <p>
                    {{ $comic->sale_date }}
                </p>
                {{-- <h5>
                    {{ $comic->type }}
                </h5> --}}

            </li>
        @endforeach
    </ul>
@endsection
