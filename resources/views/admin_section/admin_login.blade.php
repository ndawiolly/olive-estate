@extends('layout.admin_login')
@section('content')
    <div class="video-container">
        <video src="video/admin_log.mp4" autoplay loop playsinline muted></video>
        <div class="overlay">
            <img src="images/admin/wood.png" alt="">
            {{-- form --}}
            <form action="" class="mx-auto shadow w-50">
                <h3>SIGN UP HERE</h3>
                <div class="input-group p-2">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                <div class="input-group p-2">
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                  </div>
                  <div class="p-2 d-flex justify-content-center">
                    <button class="btn btn-outline-success w-50" type="submit">Submit</button>
                  </div>
            </form>
            {{-- <h2>hikfljgkdfjgkljdl</h2> --}}
        </div>
    </div>
@endsection
