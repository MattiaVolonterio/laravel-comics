@extends('layout.app')

@section('document-title', 'Comics')

@section('body')
    <body id="comics-body">
        {{-- top section --}}
        <div class="body-top">
            <div class="container">
                        {{-- label --}}
        <div class="body-label">
            <span">CURRENT SERIES</span>
        </div>
                <div class="row g-4">
                    @foreach ($comics as $key => $comic)
                    <div class="col-2">
                        <div class="comic-card">
                            <a href="{{ route('comic_description', ['key' => $key]) }}">
                                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['series']}}">
                                <div>
                                  <p>{{$comic['series']}}</p>
                                </div>
                            </a>
                          </div>
                    </div>
                        
                    @endforeach
                </div>

                <div class="button-section">
                    <button class="button button-primary">LOAD MORE</button>
                </div>
            </div>
            
        </div>

        {{-- bottom section --}}
        <div class="body-bottom">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="buy comics">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="buy comics">
                            <span>DC MERCHANDISE<span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="buy comics">
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="buy comics">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="buy comics">
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
@endsection