@extends('layouts.app')

@section('content')
<style>
  .creator-img {
    width: 200px; /* diperbesar */
    height: 200px; /* diperbesar */
    object-fit: cover;
    border-radius: 12px;
    background-color: #f2f2f2;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15); /* bayangan sedikit lebih besar */
    transition: transform 0.3s ease;
  }

  .creator-img:hover {
    transform: scale(1.05); /* efek zoom saat hover */
  }

  .creator-name {
    font-weight: 600;
    margin-bottom: 4px;
    font-size: 1.2rem;
  }

  .creator-role {
    color: #6c757d;
    font-size: 1rem;
  }
</style>

<main class="pt-90">
    <section class="container my-5">
        <h2 class="text-center mb-4">About Hinomi</h2>
<p class="text-center mb-5" style="font-size: 1rem; line-height: 1.8;">
    Hinomi began as more than just a school project — it was a shared dream between three students to 
    build something real from what we've learned. We wanted to create an online shopping platform that feels simple, 
    friendly, and reliable. From designing clean interfaces to building powerful features under the hood, every part of Hinomi 
    reflects our teamwork, long nights, and lots of coffee. It’s not just about selling products; it’s about learning, growing, 
    and proving that we’re ready for the real world. We’re proud to share Hinomi with you!
</p>


        <h4 class="text-center mb-4">Meet the Creators</h4>
        <div class="row justify-content-center">
  <div class="col-md-4 text-center mb-4">
      <img src="{{ asset('images/reva.png') }}" class="creator-img mb-3" alt="Creator 1">
      <h5 class="creator-name">Reva Narendra</h5>
      <p class="creator-role">Nim.2315323039</p>
  </div>
  <div class="col-md-4 text-center mb-4">
      <img src="{{ asset('images/made.png') }}" class="creator-img mb-3" alt="Creator 2">
      <h5 class="creator-name">Made Aditya</h5>
      <p class="creator-role">Nim.2315323031</p>
  </div>
  <div class="col-md-4 text-center mb-4">
      <img src="{{ asset('images/kupit.png') }}" class="creator-img mb-3" alt="Creator 3">
      <h5 class="creator-name">Lanang Deva</h5>
      <p class="creator-role">Nim.231532037</p>
  </div>
</div>

    </section>
</main>
@endsection
