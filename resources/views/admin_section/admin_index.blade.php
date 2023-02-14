@extends('layout.admin')
@section('content')
    <div class="container-fluid position-absolute" id="container-admin">

    </div>
    <div class="overlay-admin">
        <div class="row">
            <div class="col-4">
                {{-- error message --}}
                <div class="pb-8">
                    @if ($errors->any())
                        <div class="bg-danger text-light round-top px-4 py-2">
                            Form incomplete.
                        </div>

                        <ul class="border border-danger bg-danger text-light px-4 py-2" style="text-decoration: none;">
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none;">
                                    <i class="fas fa-exclamation"></i> {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <form action="{{ route('new property') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group mb-3">
                        <input class="form-control" name="pid" readonly value="HOU/{{ $random }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="price" placeholder="$" aria-label="price"
                            aria-describedby="basic-price">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="location" placeholder="location"
                            aria-label="location" aria-describedby="basic-location">
                    </div>
                    <div class="input-group mb-3 ">
                        <select class="form-select " name="signature" aria-label="Default select example">
                            <option hidden>Signature</option>
                            <option value="strat">Stratton Real Estate</option>
                            <option value="olive">Olive Real Estate</option>
                            <option value="wane">Wane Real Estate</option>
                            <option value="fax">Fax Real Estate</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 ">
                        <select class="form-select " name="status" aria-label="Default select example">
                            <option hidden>Status</option>
                            <option value="active">Active</option>
                            <option value="disabled">Disabled</option>
                            <option value="unavailable">Unavailable</option>
                            <option value="available-soon">Available Soon</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="uploadimage" placeholder="image" aria-label="image"
                            aria-describedby="basic-image">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>

                    <div class="mb-1 ">
                        <button type="submit" class="btn btn-danger w-100">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-8">
                <div class="row">
                    @forelse ($properties as $property)
                        <div class="col-4">
                            <div class="card shadow ">
                                <div class="card-header">
                                    <img src="{{ asset('uploads/' . $property->cover_img) }}" class="d-block w-100"
                                        alt="..." height="200">
                                </div>

                                <div class="card-body">

                                    <p>House id: {{ $property->p_id }}<br>
                                        Price: $ {{ number_format($property->price, 2) }}<br>
                                        Location: {{ $property->location }}<br>
                                        Signature: {{ $property->signature }}<br>
                                        Description: {{ $property->description }}<br>
                                        <span class="d-flex justify-content-end">Status: {{ $property->p_status }}</span>
                                    </p>
                                    <div class="block-button d-flex gap-2">
                                        <a href="{{ route('update property', $property->id) }}"
                                            class="btn btn-outline-info"
                                            onclick="return confirm('Would you like to go ahead and update this data?')">Update</a>
                                        <form action="{{ route('delete property', $property->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('You will loose this data permanently')">Delete</button>
                                        </form>
                                        <button type="submit" class="btn btn-outline-success">Archive</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class=" p-3 fs-1 fw-bold text-danger text-center">
                            No New Property <i class="fas fa-exclamation-triangle"></i>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
