@extends("layout.app")
@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{ route('update') }}" class="card mx-auto my-5" style="max-width: 600px;">
            @csrf
            @method("PATCH")
            <div class="row card-body my-5">
                <input type="hidden" name="id" value="{{ $property->id }}">
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="text" class="form-control" disabled value="{{ $property->p_id }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $property->price }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" value="{{ $property->location }}" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Signature</label>
                    <input type="text" class="form-control" name="signature" value="{{ $property->signature }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $property->description }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
