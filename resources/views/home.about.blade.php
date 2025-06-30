@extends('layouts.app')

@section('content')
<main class="pt-90">
    <section class="container my-5">
        <h2 class="text-center mb-4">About Our E-Commerce</h2>
        <p class="text-center mb-5">
            Welcome to our e-commerce application! This platform was created to make shopping more accessible, secure, and efficient. We aim to connect buyers and sellers with an intuitive and smooth user experience.
        </p>

        <h4 class="text-center mb-4">Meet the Creators</h4>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('uploads/creators/creator1.jpg') }}" class="rounded-circle mb-3" width="150" height="150" alt="Creator 1">
                <h5>Reva Narendra</h5>
                <p>Fullstack Developer</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('uploads/creators/creator2.jpg') }}" class="rounded-circle mb-3" width="150" height="150" alt="Creator 2">
                <h5>Rina Aulia</h5>
                <p>UI/UX Designer</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('uploads/creators/creator3.jpg') }}" class="rounded-circle mb-3" width="150" height="150" alt="Creator 3">
                <h5>Dimas Prasetya</h5>
                <p>Backend Developer</p>
            </div>
        </div>
    </section>
</main>
@endsection
