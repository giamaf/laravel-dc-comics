@extends('layouts.main')

@section('title', 'Edit Comic')

{{-- Main --}}
@section('main')
    <section id="add-comic">
        <div class="container">
            {{-- ! Se ho degli errori mostro l'ALERT --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger mt-3 text-start">
                    <h3>ATTENTION: Invalid fields</h3>
                    <ul>
                        @foreach ($errors->all() as $index => $error)
                            <li>{{ $index + 1 }}{{ ') ' }}{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            @include('includes.alert')

            {{-- Form --}}
            <form class="row g-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
                {{-- ! ATTENZIONE, inserire questo token per autorizzare l'invio del form --}}
                @csrf
                {{-- ! ----------------------- --}}

                {{-- * ATTENZIONE UTILIZZARE DIRETTIVA @method PER CONVERTIRE IL METODO POST IN "PUT" --}}
                @method('PUT')
                {{-- * ----------------------- --}}

                {{-- Title --}}
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"
                        class="form-control @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror"
                        id="title" name="title" placeholder="Es: Avengers" value="{{ old('title', $comic->title) }}"
                        autofocus>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                        <div class="form-text">*Required field</div>
                    @enderror
                </div>

                {{-- Series --}}
                <div class="col-md-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Es: Marvel Comics"
                        value="{{ old('series', $comic->series) }}">
                </div>

                {{-- Description --}}
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid  @elseif(old('description')) is-valid @enderror"
                        id="description" name="description" placeholder="Comics description..." rows="3">{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Thumb --}}
                <div class="col-12">
                    <label for="thumb" class="form-label">Comic Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        placeholder="Insert a valid url" value="{{ old('thumb', $comic->thumb) }}">
                </div>

                {{-- Price --}}
                <div class="col-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number"
                        class="form-control @error('price') is-invalid @elseif (old('price', '')) is-valid @enderror"
                        id="price" name="price" value="{{ old('price', 1) }}" novalidation>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                        <div class="form-text">*Required field</div>
                    @enderror
                </div>

                {{-- Type --}}
                <div class="col-md-6">
                    <label for="type" class="form-label">Type</label>
                    <select id="type" name="type" class="form-select">
                        <option selected disabled></option>
                        <option @if (old('type', $comic->type)) selected @endif value="comic-book">Comic Book</option>
                        <option @if (old('type', $comic->type)) selected @endif value="graphic-novel">Graphic Novel
                        </option>
                    </select>
                </div>

                {{-- Artists --}}
                <div class="col-md-4">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="Es: Stan Lee"
                        value="{{ old('artists', $comic->artists) }}">
                </div>

                {{-- Writers --}}
                <div class="col-md-4">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="Es: Roy Thomas"
                        value="{{ old('writers', $comic->writers) }}">
                </div>

                {{-- Buttons --}}
                <div class="col-12 d-flex gap-2 justify-content-between">
                    <div>
                        <a href="{{ route('comics.show', $comic->id) }}"><button type="button"
                                class="btn btn-primary px-4">Back to Comic</button></a>
                    </div>
                    <div>
                        <button type="reset" class="btn btn-secondary px-4">Clear</button>
                        <button type="submit" class="btn btn-success px-4">Confirm edit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script></script>
@endsection
