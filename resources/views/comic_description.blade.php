@extends('layout.app')


@section('document-title')
    {{$comic['series']}}
@endsection

@section('main')
<main id="comic-description">
    <div class="divider">
        <div class="container">
            <img src="{{$comic['thumb']}}" alt="comic_thumb" class="comic-thumb">
        </div>
    </div>

    <div class="container-comic">
        <div class="row">
            <div class="col-8">
                <h1 class="comic-title">{{$comic['title']}}</h1>
                <div class="available">
                    <div class="available-left">
                        <div class="price-left">
                            <span class="price-desc">U.S. PRICE:</span>
                            <div class="price"> {{ $comic['price'] }}</div>
                        </div>

                        <span class="available-text">AVAILABLE</span>
  
                    </div>
                    <div class="available-right">
                        <span>Check Availability</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="comic-description">{{$comic['description']}}</p>
            </div>
            <div class="col-4" class="adv-column">
                <span class="adv-title">ADVERTISEMENT</span>
                <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv">
            </div>
        </div>

    </div>

    <div class="comic-spec">
        <div class="container-spec">
            <div class="row">
                <div class="col-6">
                    <div class="col-title">Talent</div>
                    {{-- Art By --}}
                    <div class="description-row">
                        <div class="row-title">Art by:</div>
                        <div class="row-component">
                            <span class="blue-span">Josè Luis Garcia-Lopez</span>,
                            <span class="blue-span">Clay Mann</span>,
                            <span class="blue-span">Rafael Alburquerque</span>,
                            <span class="blue-span">Patrick Gleason</span>,
                            <span class="blue-span">Dan Jurgens</span>,
                            <span class="blue-span">Joe Shuster</span>,
                            <span class="blue-span">Neal Adams</span>,
                            <span class="blue-span">Curt Swan</span>,
                            <span class="blue-span">John Cassaday</span>,
                            <span class="blue-span">Oliver Coipel</span>,
                            <span class="blue-span">Jim Lee</span>
                        </div>
                    </div>
                    {{-- Written By --}}
                    <div class="description-row">
                        <div class="row-title">Written by:</div>
                        <div class="row-component">
                            <span class="blue-span">Brad Meltzer</span>,
                            <span class="blue-span">Tom King</span>,
                            <span class="blue-span">Scott Snyder</span>,
                            <span class="blue-span">Geoff Johns</span>,
                            <span class="blue-span">Brian Micheal Bendis</span>,
                            <span class="blue-span">Paul Dini</span>,
                            <span class="blue-span">Louise Simonson</span>,
                            <span class="blue-span">Richard Donner</span>,
                            <span class="blue-span">Marv Wolfman</span>,
                            <span class="blue-span">Peter J. Tomasi</span>,
                            <span class="blue-span">Dan Jurgens</span>,
                            <span class="blue-span">Jerry Siegel</span>,
                            <span class="blue-span">Paul Levitz</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-title">Specs</div>
                    {{-- series --}}
                    <div class="spec-row">
                        <div class="row-title">Series:</div>
                        <div class="row-component">
                            <span class="blue-span">{{$comic['series']}}</span>
                        </div>
                    </div>
                    {{-- price --}}
                    <div class="spec-row">
                        <div class="row-title">U.S. Price:</div>
                        <div class="row-component">
                            <span>{{$comic['price']}}</span>
                        </div>
                    </div> 
                    {{-- On sale --}}
                    <div class="spec-row">
                        <div class="row-title">On Sale Date:</div>
                        <div class="row-component">
                            <span>{{$comic['sale_date']}}</span>
                        </div>
                    </div>                                         
                </div>
            </div>
        </div>
    </div>

    <div class="utility-link">
        <div class="link-container">
            <div class="link-card">
                <span>DIGITAL COMICS</span>
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="link img">
            </div>
            <div class="link-card">
                <span>SHOP DC</span>
                <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="link img">                
            </div>
            <div class="link-card">
                <span>COMIC SHOP LOCATOR</span>
                <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="link img">                                
            </div>
            <div class="link-card">
                <span>SUBSCRIPTIONS</span>
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="link img">                                  
            </div>
        </div>
    </div>
    
</main>
@endsection
