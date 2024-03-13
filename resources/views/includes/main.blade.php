@section('main')
    <section id="cards">
        <div class="container">
            <div class="row">
                @foreach ($items as $index => $item)
                    <div class="col">
                        <a href="{{ route('card', $index) }}">
                            <div class="film-card">
                                <img src="{{ $item['thumb'] }}" alt="">
                                <figcaption>{{ $item['title'] }}</figcaption>
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
