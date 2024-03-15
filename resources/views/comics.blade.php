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
                    @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="comic-card">
                            <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['series']}}">
                            <div>
                              <p>{{$comic['series']}}</p>
                            </div>
                          </div>
                    </div>
                        
                    @endforeach
                </div>

                <div class="button-section">
                    <button class="button-primary">LOAD MORE</button>
                </div>
            </div>
            
        </div>

        {{-- bottom section --}}
        <div class="body-bottom"></div>
    </body>
@endsection