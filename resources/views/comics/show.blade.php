@extends('layouts.main')

@section('title', $comic->title)

@section('jumbo')
    @include('includes.jumbo')
@endsection

@section('main')
    @include('includes.alert')
    <section class="card-section">
        <div class="container-small flex-strech gap-xl">
            <div class="left">
                <h3>{{ $comic->title }}</h3>
                <div class="info flex">
                    <div class="left">
                        <ul class="flex">
                            <li>U.S. Price: {{ $comic->price }} </li>
                            <li>Status</li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li>Check Availability</li>
                        </ul>
                    </div>
                </div>
                <p>{{ $comic['description'] }}
                </p>
            </div>
            <div class="right">
                <h6>Advertisement</h6>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>
    </section>

    <section class="talent-specs">
        <div class="container-small flex-strech gap-xl">

            <div class="left">
                <h5>Talent</h5>
                <div class="row">
                    <span class="line-sep"></span>
                    <div class="col artists">
                        <span class="subtitle">Art by:</span>
                        <ul class="flex">
                            <a href="#">
                                <li>{{ $comic->artists }}</li>
                            </a>
                        </ul>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col writers">
                        <span class="subtitle">Written by:</span>
                        <ul class="flex">
                            <a href="#">
                                <li>{{ $comic->writers }}
                                </li>
                            </a>
                        </ul>
                    </div>
                    <span class="line-sep"></span>
                </div>
            </div>

            <div class="right">
                <h5>specs</h5>
                <div class="row">
                    <span class="line-sep"></span>
                    <div class="col series">
                        <span class="subtitle">Series:</span>
                        <a href="#"><span>{{ $comic->type }}</span></a>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col us-price">
                        <span class="subtitle">U.S. Price:</span>
                        <span>{{ $comic->price }}</span>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col sale-date">
                        <span class="subtitle">On Sale Date:</span>
                        <span>{{ $comic->sale_date }}</span>
                    </div>
                    <span class="line-sep"></span>
                </div>
            </div>
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <button class="btn btn-primary back-btn"><a href="{{ route('comics.index') }}">Back to comics</a></button>
            <button class="btn btn-warning edit-btn"><a href="{{ route('comics.edit', $comic->id) }}">Edit</a></button>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger edit-btn">Delete</button>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const deleteForm = document.getElementById('delete-form');

        deleteForm.addEventListener('submit', e => {
            // Impedisco il ricaricamento della pagina
            e.preventDefault();

            // Chiedo conferma di voler eliminare il Comic
            const confirmation = confirm('Confermi di voler eliminare {{ $comic->title }}?');

            // Se confermato invio il form
            if (confirmation) deleteForm.submit();

        });
    </script>
@endsection
