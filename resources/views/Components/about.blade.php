@extends('layouts.main')

@section('container')
    <div class="hero-section">
        <div class="hero-isi">
            <div class="hero-text">
                <h1>Explore Our <br> Indonesian Recipe</h1>
                <p>Let's Start Cooking With Our Most Iconic <br> Indonesian Food</p>
            </div>
            <div class="hero-button">
                <button>Our Best Food</button>
                <button>Our Recies</button>
            </div>
        </div>
    </div>
    
  <div class="about-container ">
      <div class="about-judul">
          <h1>About <span>Us</span> </h1>
      </div>
      <div class="about-section">
          <div class="about-text">
              <p>
              Food has a distinctive taste and comes from various countries, both locally and globally. However, local/archipelagic food is still rarely known in the community, one of which is the typical Betawi babanci vegetable.
              </p>
              <p>
                Therefore, we have an idea to build a website application called IC Food as a means of preserving and popularizing Indonesian specialties.
              </p>
          </div>
          <div class="about-logo">
              <span>IC FOOD </span>
          </div>
      </div>

      <div class="powered-by">
          <div class="powered-judul">
              <h1>Powered <span>by</span> </h1>
          </div>
          <div class="logo-container">
            <div class="logo">
                 <img  class="w-100" src="assets/image-2.png" alt="test">
            </div>

            <div class="logo">
                 <img class="w-100"  src="assets/image-3.png" alt="test">
            </div>
            <div class="logo">
                 <img class="w-100"  src="assets/image-4.png" alt="test">
            </div>
            <div class="logo">
                 <img class="w-100"  src="assets/image-1.png" alt="test">
            </div>


          </div>

      </div>

  </div>
  {{-- <x-menu></x-menu> --}}
@endsection

