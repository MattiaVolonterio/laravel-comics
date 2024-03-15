<footer>
    {{-- footer top --}}
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    {{-- link list 1 --}}
                    <span>DC COMICS</span>
                    <ul>
                        <li>
                            <a href="{{ route('characters') }}" >Characters</a>
                        </li>
                        <li>
                            <a href="{{ route('comics') }}">Comics</a>
                        </li>
                        <li>
                            <a href="{{ route('movies') }}" >Movie</a>
                        </li>
                        <li>
                            <a href="{{ route('tv') }}">Tv</a>
                        </li>
                        <li>
                            <a href="{{ route('games') }}">Games</a>
                        </li>
                        <li>
                            <a href="{{ route('videos') }}">Videos</a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">News</a>
                        </li>
                    </ul>

                    {{-- link list 2 --}}
                    <span>SHOP</span>
                    <ul>
                        <li>
                            <a href="{{ route('shop') }}" >Shop DC</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Shop DC Collectables</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- footer bottom --}}
    <div class="footer-bottom">
        <div class="container">
            <button class="button button-outlined">SIGN-UP NOW!</button>

            <div class="footer-bottom-right">
                <span>FOLLOW US</span>

                <ul>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="facebook">
                        </a>                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>