@extends('layout.app')
@section('content')
    <div class="aboutContainer">
        <div class="aboutOverlay">
            <h1>SEND GENERAL ENQUIRES</h1>

            <p>General Enquires</p>
            <i class="fas fa-phone"></i> 0907876565765 <i class="fas fa-envelope"></i> info@oliveestate.com

            <div class="img-div">
                <img src="images/contact/svg.jpg" alt="here">
            </div>
            <div class="info">
                <p>View our <a href="#">Agent Directory</a></p>
                <p>Visit us on <a href="#">Facebook</a> and <a href="#">Instagram</a></p>
{{-- 
                <ul class="list-group">
                    @foreach ($products as $index => $value)
                        <li class="list-group-item">{{$index . ' '.  $value  }}</li>
                    @endforeach

                    @forelse ($products as  $product )
                        <li class="list-group-item">{{ $product }}</li>
                    @empty
                        <h1 class="text-danger">No products available</h1>
                    @endforelse
                </ul> --}}
            </div>
            {{-- contact form --}}
            <div class="contactform">
                <form action="#" class="mx-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" disabled placeholder="CotactID" aria-label="contactid"
                            aria-describedby="basic-contact" value="CTA/{{ $word }}">
                        <span class="input-group-text text-danger" id="basic-contact">*</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname"
                                aria-describedby="basic-addon1">
                            <span class="input-group-text text-danger" id="basic-addon1">*</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="lastname" aria-label="lastname"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text text-danger" id="basic-addon2">*</span>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="input-group mb-3">
                            <input type="phone" class="form-control" placeholder="phone" aria-label="phone"
                                aria-describedby="basic-phone">
                            <span class="input-group-text text-danger" id="basic-phone"></span>
                        </div>
                        <div class="input-group mb-3 w-25">
                            <select class="form-select " aria-label="Default select example">
                                <option selected></option>
                                <option value="home">Home</option>
                                <option value="cell">Cell</option>
                                <option value="work">Work</option>
                                <option value="fax">Fax</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <span class="input-group-text text-danger" id="basic-addon1">*</span>
                    </div>

                    <p>So that we may better assist you..</p>

                    <div class=" mb-3">
                        <button type="button" class="btn btn-danger text-light" onclick="showOptions()">
                            Show More Options <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="moreoptions d-none" id="otheroptions">

                        <div class="input-group mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>

                    <div class=" m-3 float-end">
                        <button class="btn btn-danger px-5">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showOptions() {
            const option = document.getElementById("otheroptions");
            option.classList.toggle("d-none");
        }
    </script>
@endsection
