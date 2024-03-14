@section('main')
    <section id="cards">
        <div class="container">
            <div class="row">
                @foreach ($comics as $index => $comic)
                    <div class="col">
                        <a href="{{ route('comics.show', $index) }}">
                            <div class="film-card">
                                <img src="{{ $comic->thumb }}" alt="">
                                <figcaption>{{ $comic->title }}</figcaption>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <button>
            <h5>LOAD MORE</h5>
        </button>
    </section>
@endsection
