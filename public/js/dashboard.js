//bookmark-icon

var bookmarkLikeIcon = Array.from(document.querySelectorAll('.bookmark-like'));
console.log(bookmarkLikeIcon);
let cartCard = [];
let cartNamaCard =[];

bookmarkLikeIcon.forEach(function(icon){
    icon.addEventListener('click', function(e){
        if(e.target.parentElement.getAttribute('data-icon') == 'bookmark'){
// mengubah warna
            e.target.parentElement.style.color = '#ef7b3a';
//menangkap isi card
            let card =e.target.parentElement.parentElement.parentElement.parentElement;
            card = card.querySelector('.card-atas');
            let namaCard = card.querySelector('.card-atas-text .card-judul').innerText;
            let gambarCard = card.querySelector('.card-atas-img img').getAttribute('src');
            let starsCard = card.querySelector('.card-atas-text .card-stars').innerHTML;

            if(!cartNamaCard.includes(namaCard)){
                let bookItemIsi = '';
                cartCard.push(retunBookItemIsi(namaCard, gambarCard, starsCard))
                cartNamaCard.push(namaCard);
                cartCard.forEach(function(c){
                    bookItemIsi+=c;
                })
                let bookmarkIsi = document.querySelector(".bookmark-isi");
                bookmarkIsi.innerHTML = bookItemIsi;
            }
        };
    });
});


let retunBookItemIsi = function(namaCard,gambarCard,starsCard){
return`
<a href="">
<div class="bookmark-isi-item">
    <div class="bookmark-img">
        <img src="${gambarCard}" alt="">
    </div>
    <div class="bookmark-text">
        <h6>${namaCard}</h6>
        <ul class="bookmark-stars">
${starsCard}
        </ul>
    </div>
    <div class="bookmark-trash">
        <i class="fas fa-trash"></i>
    </div>
</div>
</a>`
}


//remove bookmark

