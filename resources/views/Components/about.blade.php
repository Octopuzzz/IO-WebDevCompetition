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


  {{-- menu  --}}

  @if($foods)
    <div class="menu-container">
        <div class="menu-header">
        <h1>Choose Your Favorite!</h1>
        <a href="/dashboard"><button class="menu-button">See All</button></a>
        </div>
        <div class="menu-body">
            <div class="menu-body-utama">
                <div class="menu-body-card">
                    <div class="menu-card">
                        <div class="menu-card-img">
                            <img src="{{ asset('./storage/assets/'.$foods[0]->image) }}" alt="">
                        </div>
                        <div class="menu-card-text">
                            <div class="card-header">
                                <h1>{{ $foods[0]->Food_Name }}</h1>
                            </div>
                            <div class="card-isi">
                                <p>{{ $foods[0]->Food_Excerpt }}</p>

                                <div class="card-stats">
                                    <ul class="stats-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </ul>
                                    <div class="stats-rating">
                                        {{ $foods[0]->Rating.' ('.$foods[0]->Total_Rating.')'}}
                                    </div>
                                </div>
                                <div class="card-like-time">
                                    <div class="like">
                                        <i class="fas fa-heart"></i>
                                        <span>{{ $foods[0]->Total_like }}</span>
                                    </div>
                                    <div class="time">
                                        <i class="fas fa-clock"></i>
                                        <span>{{ $foods[0]->Cooking_Time }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="card-arrow-button"><i class="fas fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="menu-body-sekunder">
                @foreach($foods->slice(1,5) as $food)
                    <div class="menu-card">
                        <div class="menu-card-img">
                            <img src="{{ asset('./storage/assets/'.$food->image) }}" alt="">
                        </div>
                        <div class="menu-card-text">
                            <h3>{{ $food->Food_Name }}</h3>
                            <div class="card-stats">
                                <ul class="stats-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </ul>
                                <div class="stats-rating">
                                    {{ $food->Rating.' ('.$food->Total_Rating.')'}}
                                </div>
                            </div>
                        </div>
                        <a href="" class="card-arrow-button"><i class="fas fa-circle-arrow-right"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Cook in 3 easy step -->
    <h1 class="easy-step-title"><span>Cooking</span> in 3 Easy Step</h1>
    <div class="easy-step-container">

        <div class="easy-step-card">
        <div class="icon-container">
            <img class="w-100" src="assets/component-1.png" alt="">
        </div>
        <p class="card-title">Choose Your Favorite</p>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>

        <div class="easy-step-card">
        <div class="icon-container">
            <img class="w-100" src="assets/component-1.png" alt="">
        </div>
        <p class="card-title">Follow the Recipe</p>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>

        <div class="easy-step-card">
        <div class="icon-container">
            <img class="w-100" src="assets/component-1.png" alt="">
        </div>
        <p class="card-title">Enjoy Your Food</p>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
    </div>

    <!-- Top Recipes of The Week -->
    <div class="top-recipes-container">
        <div class="top-recipes">
        <h1>Top Recipes of The Week</h1>


        <div class="recipes-container">
            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>

            <div class="recipes-item">
            <p>1</p>
            <p class="recipes-item-title" >Sayur Asem Kalimantan</p>
            <button>View More</button>
            </div>
        </div>


        </div>
    </div>

    <!-- Contact Us Form -->
    <div class="form-container">
        <div class="form">
            <div class="form-header">
                <h1>contact<span>us</span></h1>
            </div>
            <form action="submit" class="form-body">
            <div class="form-item">
                <label for="">Name</label>
                <input placeholder="Your name" type="text">
            </div>

            <div class="form-item">
                <label for="">Email Address</label>
                <input placeholder="Your email" type="email">
            </div>

            <div class="form-item">
                <label for="">Subject</label>
                <input placeholder="Your subject" type="text">
            </div>

            <div class="form-item">
                <label for="">Message</label>
                <textarea placeholder="Your message" name="" id="" rows="5"></textarea>
            </div>

            <button type="submit" class="form-button">Submit</button>
            </form>
        </div>
    </div>
  @endif

@endsection

