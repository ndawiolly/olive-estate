@extends('layout.app');
@section('content')
    <div class="aboutContainer">
        <div class="aboutOverlay">

            {{-- condintional statement --}}
            <h1>AVAILABLE RENTALS</h1>
            <div class="row">
                @forelse ($properties as $property)

                <div class="col-3">
                    <div class="card">
                        <img src="../images/pic2.jpg" alt="work please" height = "200">
                        <div class="card-body">
                            {{ $property->p_id }}
                            <p class="text-danger">
                                SB5 Styles Brook 4 Bed/3.5 Bath - Available for rest of the season!
                                Stratton Mountain Resort Area, VT
                            </p>
                            <div class="basic-info" >
                                <p>$29,000<br>
                                4 Beds/4 Total Baths/Rental<br>
                                MLS #: SB5<br>

                                Offered By: Stratton Real Estate, Stratton Real Estate
                                </p>
                            </div>
                        </div>
                        <div class="stat d-flex justify-content-end text-info" >
                            <p>status:Active</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="card p-3 fs-1 fw-bold text-danger text-center">
                    No New Properties
                </div>
                @endforelse

            </div>

        </div>
    </div>
@endsection
