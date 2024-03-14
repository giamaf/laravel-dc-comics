@section('main')
    <section id="cards">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="film-card">
                                <img src="{{ $comic->thumb }}" alt="">
                                <figcaption>{{ $comic->title }}</figcaption>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="load">
                <a href="#">
                    <h5>LOAD MORE</h5>
                </a>
            </button>
            <button class="add">
                <a href="{{ route('comics.create') }}">
                    <h5>Add new</h5>
                </a>
            </button>
        </div>
    </section>
@endsection
