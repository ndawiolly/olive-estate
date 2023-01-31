@extends('layout.app')
@section('content')
{{-- background img --}}
<div class="container-body">
    <img src="images/back-img.jpg" alt="" >
    <div class="overlay">
        <form action="">
            <div class="input">
                <input type="text" placeholder="city">
            </div>
            <div class="input">
                <select type="text" id="" aria-placeholder="type">
                    <option value="type">Type</option>
                    <option value="All">All</option>
                    <option value="Boat Dock">Boat Dock</option>
                    <option value="Business Opportunity">Business Opportunity</option>
                    <option value="Commercial lease">Commercial lease</option>
                    <option value="Commercial Sale">Commercial Sale</option>
                    <option value="Condo">Condo</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Land">Land</option>
                    <option value="Mobile Family">Mobile Family</option>
                    <option value="Rental">Ranking</option>
                    <option value="Rental">Rental</option>
                </select>
            </div>
            <div class="input">
                <select name="" type= "text" id="">
                    <option value="Bed" hidden>Bed</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="input">
                <select name="" type= "text" id="">
                    <option value="Beths" hidden>Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="input">
                <input type="text" placeholder="Min Price">
            </div>
            <button type="button">
                Submit
            </button>
        </form>
    </div>
</div>


{{-- background img ends --}}
 <div class="bodycontent1">
    <h1>OLIVE REAL ESTATE</h1>
 </div>
 <hr style="width: 50%; color:red;">
 <div class="row">
     <p>
        For more than 50 years, Stratton Real Estate has been the exclusive brokerage for home sales and winter seasonal leases at <br>Olive Mountain Resort.<br>
    
    NOTICE: Our doors are open for walk-ins and our agents remain on-call, 7 days a week, and are happy to discuss, buying, selling, or renting a home at Southern Vermont's highest peak. Email the Stratton Real Estate office at <br>
    <a href="#">info@oliverealestate.com</a> or contact individual agents via phone call, text, and email. Read more at  Stratton.com play safe, play smart for Vermont’s travel guidelines.<br>
    
    View Stratton Real Estate Agent Directory.
     </p>
    
 </div>

 {{-- images gallery --}}
 <div class="galleryImg">
    <div class="gal">
        <img src="images/pic1.jpg" alt="" height="300">
        <div class="overlayimg">
            BROWSE EXECUTIVE LISTINGS
        </div>
    </div>
    <div class="gal">
        <img src="images/pic2.jpg" alt="" height="300">
        <div class="overlayimg">
           RENT FOR THE SEASON  
        </div>
    </div>
    <div class="gal">
        <img src="images/pic3.jpg" alt="" height="300">
        <div class="overlayimg">
            LIST WITH US
        </div>
    </div>
 </div>


@endsection