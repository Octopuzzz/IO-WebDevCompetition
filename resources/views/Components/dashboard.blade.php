<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>{{ $title }}</title>
</head>
<body>
    @if($foods)
    <section class="dashboard">
        {{-- IC food--}}
        <div class="ic-food-dashboard">
            <a href="/"> <h1 class="ic-food">IC <span>Food</span></h1></a>
            <div class="category">
                <h5 class="category-judul">Category</h5>
                <ul class="category-isi">
                    @foreach($Categories as $category)
                        <li class="category-isi-item">
                            <input type="checkbox" id="{{ $category->Name }}" data-nilai = "kalimantan">
                            {{-- @if()
                            @endif --}}
                            <label for="{{ $category->Name }}">{{ $category->Name }}</label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{--   isi --}}
        <div class="isi-dashboard">
            <div class="dashboard-utama">
                {{-- search --}}
                    <form class="search" action="/dashboard" method="GET">
                        @csrf
                        <input type="search" name = "search" placeholder="Search by food name">
                    </form>

                {{-- ads --}}
                <div class="bookmark-ads">
                    <div class="ads-img">
                        <img src="./assets/image-10.png" alt="">
                    </div>
                    <div class="ads-text">
                        <h3>Create Your Own List!!</h3>
                        <p>use our bookmark feature to save recipes so you won’t forget them.</p>
                    </div>
                </div>
                {{-- card --}}
                <div class="dashboard-card">
                    @foreach($foods as $food)
                    <div class="card" id= "{{ $food->province->Name }}">
                        <div class="bookmark-like">
                            <div class="bookmark-icon">
                                <i class="fas fa-bookmark"></i>
                            </div>
                            <div class="bookmark-heart">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="card-atas">
                            <div class="card-atas-img">
                                <img src="{{ asset('./storage/assets/'.$food->Cooking_Image ) }}" alt="">
                            </div>
                            <div class="card-atas-text">
                                <h5 class="card-judul">{{ Str::limit($food->Food_Name,20)}}</h5>
                                <span class="card-daerah">{{ $food->province->Name }}</span>
                                <ul class="card-stars">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $food->Rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="fa-regular fa-star"></i>
                                        @endif
                                    @endfor
                                </ul>
                                <span class="card-rating">
                                    {{ $food->Rating.' ('.$food->Total_Rating.')'}}
                                </span>
                            </div>
                        </div>
                        <div class="card-bawah">
                            <p>
                            @if($length = Str::length($food->Food_Excerpt) > 100)
                                {{ Str::limit($food->Food_Excerpt, 100, ' ...') }}
                            @endif
                            </p>
                            <div class="card-ingredients">
                                <span class="ingredients-judul">Ingredients</span>
                                <ul class="ingredients-isi">
                                    @foreach($food->PvIngredients->slice(0,3) as $item)
                                        <li>{{ $item->Ingredients->name }}</li>
                                    @endforeach
                                    {{-- {{ $food->PvIngredients }} --}}
                                </ul>
                            </div>
                            <div class="button-time">
                                <a href="/detail/{{ $food->slug }}"><button>View Detail</button></a>

                                <div class="time">
                                    <i class="fas fa-clock"></i>
                                    <span>{{ $food->Cooking_Time }}mins</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
            <div class="dashboard-bookmark">
                <div class="bookmark-container">
                    <div class="bookmark-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="bookmark-header">Bookmark</h3>
                    <div class="bookmark-isi">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
    @endif
    <script src="js/dashboard.js"></script>
</body>
</html>
