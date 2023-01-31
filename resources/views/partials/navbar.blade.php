{{-- first navbar ------------------------------------------ --}}
<nav>
    <div class="nav-brand">
        <img src="images/logo-header2.png" alt="my brand" height="50">
    </div>

    <div class="brand-name">
        <div class="head">OLIVE REAL ESTATE</div>
        <hr style="color:red " class="w-50 mx-auto">
        <p>The real estate office of Olive Real Estate</p>

    </div>

    <div class="social-m">
        <p>contact us :+239 392 3283</p>
    </div>
</nav>
{{-- second navbar -------------------------------------------- --}}

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STRTTLION LISTING</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        SEASONAL RENTALS
                    </a>
                    
                    <ul class="dropdown-menu">
                        
                        @forelse ($products as $product )
                        <li>
                            <a class="dropdown-item" href="{{ route('estate_gallery',$product) }}">{{ $product }}</a>
                        </li>
                            
                        @empty
                            <li>Nothing</li>
                        @endforelse
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">MOUNTAIN LIFE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                </li>

            </ul>
            
        </div>
    </div>
</nav>

{{-- seccond navbar ends --}}
