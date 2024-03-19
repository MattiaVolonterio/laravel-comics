@extends('layout.app')

@section('document-title', 'Comics')

@section('main')
    <main id="comics-body">
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
        @section('utility-link')
        @include('./partials/utility_link')
        @endsection
    </main>
@endsection