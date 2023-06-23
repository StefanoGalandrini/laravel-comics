@php
    
    $dcComics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
    
    $dcShops = ['Shop DC', 'Shop DC Collectibles'];
    
    $dcGenerals = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choiches', 'Advertising', 'jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    
    $dcSites = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    
@endphp

<div class="footer-container">
    <footer>
        <div class="links">
            <ul class="first">
                <li class="title">DC COMICS</li>
                @foreach ($dcComics as $dcComic)
                    <li><a href="#">{{ $dcComic }}</a></li>
                @endforeach

                <li class="last-title">SHOP</li>
                @foreach ($dcShops as $shop)
                    <li><a href="#">{{ $shop }}</a></li>
                @endforeach
            </ul>


            <ul>
                <li class="title">DC</li>
                @foreach ($dcGenerals as $general)
                    <li><a href="#">{{ $general }}</a></li>
                @endforeach
            </ul>

            <ul>
                <li class="title">SITES</li>
                @foreach ($dcSites as $site)
                    <li><a href="#">{{ $site }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="logo">
            <img src={{ Vite::asset('resources/img/dc-logo-bg.png') }} alt="" />
        </div>
    </footer>
</div>

@include('components.cta')
