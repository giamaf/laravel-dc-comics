@extends('layouts.main')

@section('jumbo')
    @include('includes.jumbo')
@endsection

@section('main')
    <section class="card-section">
        <div class="container-small flex-strech gap-xl">
            <div class="left">
                <h3>{{ $items['title'] }}</h3>
                <div class="info flex">
                    <div class="left">
                        <ul class="flex">
                            <li>U.S. Price: {{ $items['price'] }} </li>
                            <li>Status</li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li>Check Availability</li>
                        </ul>
                    </div>
                </div>
                <p>{{ $items['description'] }}
                </p>
            </div>
            <div class="right">
                <h6>Advertisement</h6>
                <img src="{{ $items['thumb'] }}" alt="{{ $items['title'] }}">
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
                            @foreach ($items['artists'] as $artist)
                                <a href="#">
                                    <li>{{ $artist }}@if (!$loop->last)
                                        ,@else.
                                        @endif
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col writers">
                        <span class="subtitle">Written by:</span>
                        <ul class="flex">
                            @foreach ($items['writers'] as $writer)
                                <a href="#">
                                    <li>{{ $writer }}@if (!$loop->last)
                                        ,@else.
                                        @endif
                                    </li>
                                </a>
                            @endforeach
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
                        <a href="#"><span>{{ $items['type'] }}</span></a>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col us-price">
                        <span class="subtitle">U.S. Price:</span>
                        <span>{{ $items['price'] }}</span>
                    </div>
                    <span class="line-sep"></span>
                    <div class="col sale-date">
                        <span class="subtitle">On Sale Date:</span>
                        <span>{{ $items['sale_date'] }}</span>
                    </div>
                    <span class="line-sep"></span>
                </div>
            </div>

        </div>
    </section>
@endsection
