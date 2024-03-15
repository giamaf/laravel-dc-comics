@extends('layouts.main')

@section('title', 'Add New')

{{-- Main --}}
@section('main')
    <section id="add-comic">
        <div class="container">
            {{-- ! Se ho degli errori --}}
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
            <form class="row g-3 py-3" action="{{ route('comics.store') }}" method="POST">
                {{-- ! ATTENZIONE, inserire questo token per autorizzare l'invio del form --}}
                @csrf
                {{-- ! ----------------------- --}}
                {{-- Title --}}
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Es: Avengers"
                        value="{{ old('title', '') }}" autofocus>
                </div>

                {{-- Series --}}
                <div class="col-md-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Es: Marvel Comics"
                        value="{{ old('series', '') }}">
                </div>

                {{-- Description --}}
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Comics description..." rows="3">{{ old('description', '') }}</textarea>
                </div>

                {{-- Thumb --}}
                <div class="col-12">
                    <label for="thumb" class="form-label">Comic Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        placeholder="Insert a valid url">
                </div>

                {{-- Price --}}
                <div class="col-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', 1) }}"
                        novalidation>
                </div>

                {{-- Type --}}
                <div class="col-md-6">
                    <label for="type" class="form-label">Type</label>
                    <select id="type" name="type" class="form-select">
                        <option selected disabled></option>
                        <option @if (old('type', '') === 'comic-book') selected @endif value="comic-book">Comic Book</option>
                        <option @if (old('type', '') === 'graphic-novel') selected @endif value="graphic-novel">Graphic Novel
                        </option>
                    </select>
                </div>

                {{-- Artists --}}
                <div class="col-md-4">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="Es: Stan Lee"
                        value="{{ old('artists', '') }}">
                </div>

                {{-- Writers --}}
                <div class="col-md-4">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="Es: Roy Thomas"
                        value="{{ old('writers', '') }}">
                </div>

                {{-- Buttons --}}
                <div class="col-12 mb-3">
                    <button type="reset" class="btn btn-secondary px-4">Clear</button>
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </form>
        </div>
    </section>


@endsection
