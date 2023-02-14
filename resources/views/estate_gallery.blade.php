@extends('layout.app');
@section('content')
    <div class="aboutContainer">
        <div class="aboutOverlay">

            {{-- condintional statement --}}
            <h1>AVAILABLE RENTALS</h1>
            <div class="row">
                @forelse ($properties as $property)

                <div class="col-12 col-lg-3 p-2">
                    <div class="card p-2">
                        <img src="../images/pic2.jpg" alt="work please" height = "200">
                        <div class="card-body">
                            {{ $property->p_id }}
                            <p class="text-danger">
                                {{ $property->description}}
                            </p>
                            <div class="basic-info" >
                                <p>${{  $property->price  }}<br>
                                4 Beds/4 Total Baths/Rental<br>
                                MLS #: SB5<br>

                                {{  $property->signature}}
                                </p>
                            </div>
                        </div>
                        <div class="stat d-flex justify-content-end text-info" >
                            <p>status:{{ $property->p_status }}</p>
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
