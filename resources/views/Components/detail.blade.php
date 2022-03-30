<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <title>{{ $title }}</title>
</head>
<body>
  <div class="detail">
    <div class="detail-container">
      <div class="x-button">
        <a href="/dashboard"> <i class="fa-solid fa-xmark"></i></a>
      </div>

      <div class="header-detail">
        <div class="detail-card-image">
          <img src="/assets/photo.jpg" alt="sayur asem">
        </div>

        <div class="detail-attributes">
          <div class="detail-judul">
            <h1>{{ $detail->Food_Name }}</h1>
          </div>
          <div class="detail-city">
            <h3>{{ $detail->province->Name }}</h3>
          </div>
          <div class="detail-icons">
            <div class="detail-icon">
              <i class="fa-solid fa-star"></i>
              <p>2.5</p>
            </div>
            <div class="detail-icon">
              <i class="fa-solid fa-clock"></i>
              <p>90 mins</p>
            </div>
            <div class="detail-icon">
              <i class="fa-solid fa-cake-candles"></i>
              <p>Easy</p>
            </div>
            <div class="detail-icon">
              <i class="fa-solid fa-heart"></i>
              <p>978</p>
            </div>
          </div>
        </div>
        <div class="detail-descriptions">
          <div class="detail-description">
            <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            </p>
          </div>
          <div class="detail-description-button">
            <button>  <a href="https://www.youtube.com/">Watch Video</a> </button>
          </div>
        </div>
      </div>
      <div class="ingredients">
        <h1>Ingredients</h1>
        <div class="ingredients-image">
          <div class="ingredient-card">
            <div class="img-ingredient">
              <img src="/assets/photo.jpg" alt="sayur asem">
            </div>
            <p>Daun Melinjo</p>
          </div>
          <div class="ingredient-card">
            <div class="img-ingredient">
              <img src="/assets/photo.jpg" alt="sayur asem">
            </div>
            <p>Daun Melinjo</p>
          </div>
          <div class="ingredient-card">
            <div class="img-ingredient">
              <img src="/assets/photo.jpg" alt="sayur asem">
            </div>
            <p>Daun Melinjo</p>
          </div>
          <div class="ingredient-card">
            <div class="img-ingredient">
              <img src="/assets/photo.jpg" alt="sayur asem">
            </div>
            <p>Daun Melinjo</p>
          </div>






        </div>
      </div>

      <div class="step-cook">
        <h1>How to Cook</h1>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
        <p>1. Siapkan Panci rebus air sampai mendidih</p>
      </div>

      <button class="restaurant-btn"> View Restaurant Nearby </button>
    </div>

  </div>


</body>
</html>
