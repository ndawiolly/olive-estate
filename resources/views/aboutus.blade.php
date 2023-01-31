@extends('layout.app')
@section('content')
    <div class="aboutContainer">
        <div class="aboutOverlay">

            <h1>ABOUT US </h1>
            <p>
                Olive Real Estate consistently dominates the Village and Mountain home market. Our sales force, composed of
                seven full time brokers with an average of 20 years’ experience, has sold over 75% of the transactions at
                Stratton in the last year. For over 50 years, Stratton Real Estate has been the only real estate agency
                dedicated exclusively selling Stratton properties.<br>

                The great majority of properties for sale at the resort are listed exclusively with Stratton Real Estate.
                Our office is the only “on resort” real estate office, and is conveniently located in the heart of
                Stratton’s Village next to Fire Tower restaurant. We have the most knowledgeable staff in the area with the
                average agent having over 20 years of resort experience, and are open every day except December 25th. We are
                here to make it easy to just drop by when on resort.<br>

                We specialize in real estate but minor in skiing, dining, golfing, biking and all the other great things
                that Stratton offers! Even if you just want to find out what is new at Stratton, get a dining recommendation
                or find out where the best snow is on the Mountain, we are here to help
            </p>

            <h3>SEASONAL RENTAL:</h3>
            <p> If you are ready to try life at the Mountain but not yet ready to buy, let us place you in a beautiful
                house, condo or townhouse for winter (November – April).

                As a full service on stop shop, we work with buyers, sellers and investors in real estate transactions
                spanning all of the price ranges and property types.

                Whether you are looking to sell, buy or are curious about resort real estate, drop in or contact us at
                802-297-4100 or by email to start a discussion of your needs.</p>

            <h3>THINKING OF SELLING YOUR STRATTON HOME? </h3>
            <p> Let us help! Why Stratton Real Estate?</p>



            <h3>Location. Location. Location.</h3>
            <p> Our office in the village is easily accessible to visitors, guests and seasonal rentals considering home
                ownership. We’re open 7 days a week.</p>



            <h3>Promotion & Marketing</h3>
            <p>As members of the South Central Vermont Board of Realtors®, you'll see your listings on all real estate sites
                including Zillow and Trulia.

                We've launched our new marketing campaign for the season and we're sure you will agree with us … Stratton.
                Love it. Live it.</p>



            <h3>Experience & History</h3>
            <p>With seven full time agents with an average of 20 years’ experience. </p>

        </div>
    </div>
    {{-- random values --}}
{{-- echo $trxt = str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890-_+!@#$%^&*()\|"); --}}

    {{-- // $key = "";
    // $myArray = array("a", "b", "c", "d", "e", "f", "g", "1", "2", "3");
    // $a = 0;
    // while ($a <= 4) {
        // echo $key = $myArray[rand(0, 9)];
        // $a++;
    // } --}}
    
@endsection
