@extends('layout.admin')
@section('content')
    <div class="container-fluid position-absolute" id="container-admin">

    </div>
    <div class="overlay-admin">
        <div class="row">
            <div class="col-4">
                <form action="{{ route('new property') }}" method="POST">
                    @csrf

                    <div class="input-group mb-3">
                        <input class="form-control" name="pid" readonly value="HOU/{{ $random }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="price" placeholder="$" aria-label="price"
                            aria-describedby="basic-price">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="location" placeholder="location" aria-label="location"
                            aria-describedby="basic-location">
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
                        <input type="file" class="form-control" placeholder="image" aria-label="image"
                            aria-describedby="basic-image">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
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
                            <div class="card shadow">
                                <img src="../../images/pic3.jpg" alt="house" height="150">
                                <div class="card-body">

                                    <p>House id: {{ $property->p_id }}<br>
                                        Price: $ {{  number_format($property->price,2)  }}<br>
                                        Location: {{ $property->location }}<br>
                                        Signature: {{ $property->signature }}<br>
                                        Description: {{ $property->description }}<br>
                                        <span class="d-flex justify-content-end">Status: {{ $property->p_status }}</span>
                                    </p>
                                    <div class="block-button d-flex gap-2">
                                        <button type="submit" class="btn btn-outline-info">Update</button>
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        <button type="submit" class="btn btn-outline-success">Archive</button>
                                    </div>
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
    </div>
@endsection

