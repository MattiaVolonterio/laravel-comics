<footer>
    {{-- footer top --}}
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="link-list">
                        {{-- link list 1 --}}
                        <div class="link-list-1">
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
                        </div>

                        {{-- link list 2 --}}
                        <div class="link-list-2">
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

                        {{-- link list 3 --}}
                        <div class="link-list-3">
                            <span>DC</span>
                            <ul>
                                <li>
                                    <a href="#" >Term Of Use</a>
                                </li>
                                <li>
                                    <a href="#" >Privacy policy (New)</a>
                                </li>
                                <li>
                                    <a href="#" >Ad Choices</a>
                                </li>
                                <li>
                                    <a href="#" >Advertising</a>
                                </li>
                                <li>
                                    <a href="#" >Jobs</a>
                                </li>
                                <li>
                                    <a href="#" >Subscriptions</a>
                                </li>
                                <li>
                                    <a href="#" >Talent Workshops</a>
                                </li>
                                <li>
                                    <a href="#" >CPSC Certificates</a>
                                </li>
                                <li>
                                    <a href="#" >Rating</a>
                                </li>
                                <li>
                                    <a href="#" >Shop Help</a>
                                </li>
                                <li>
                                    <a href="#" >Contact Us</a>
                                </li>
                            </ul>  
                        </div>

                        {{-- link list 4 --}}
                        <div class="link-list-3">
                            <span>SITES</span>
                            <ul>
                                <li>
                                    <a href="#" >DC</a>
                                </li>
                                <li>
                                    <a href="#" >MAD Magazine</a>
                                </li>
                                <li>
                                    <a href="#" >DC Kids</a>
                                </li>
                                <li>
                                    <a href="#" >DC Universe</a>
                                </li>
                                <li>
                                    <a href="#" >DC Power Visa</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                    <div class="copyright">
                        <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All right reserved. <a href="#">Cookies Setting</a></p>
                    </div>
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