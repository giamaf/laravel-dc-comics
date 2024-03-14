@extends('layouts.main')

@section('title', $comic->title)

@section('jumbo')
    @include('includes.jumbo')
@endsection

@section('main')
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
    </section>
@endsection
