@extends ('layouts.app');

@section('main_content')
    <div class="container">
        <h1> Modifica fumetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comic.update', ['comic' => $comic_to_update]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') :  $comic_to_update->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comic_to_update->description }}"">
            </div>
            <div class=" form-group mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ $comic_to_update->thumb }}">
            </div>
            <div class="form-group  mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price"
                    value="{{ $comic_to_update->price }}">
            </div>
            <div class=" form-group mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ $comic_to_update->series }}">
            </div>
            <div class="form-group  mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="2022-05-20">
            </div>
            <div class="form-group mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type"
                    value="{{ $comic_to_update->type }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
