//bookmark-icon

var bookmarkLikeIcon = Array.from(document.querySelectorAll('.bookmark-like'));
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

            if(cartCard.length == 0){
                let bookItemIsi = '';
                cartCard.push(retunBookItemIsi(namaCard, gambarCard, starsCard));
                cartCard.forEach(function(c){
                    bookItemIsi+=c;
                })
                let bookmarkIsi = document.querySelector(".bookmark-isi");
                bookmarkIsi.innerHTML = bookItemIsi;
            }else{
                let tanda = 0;
                cartCard.forEach(function(c){
                    if(!c.includes(namaCard) && tanda == 0){
                        let bookItemIsi = '';
                        cartCard.push(retunBookItemIsi(namaCard, gambarCard, starsCard))
                        cartNamaCard.push(namaCard);
                        cartCard.forEach(function(c){
                            bookItemIsi+=c;
                        })
                        let bookmarkIsi = document.querySelector(".bookmark-isi");
                        bookmarkIsi.innerHTML = bookItemIsi;
                        tanda = 1;
                    }
                });
            }
        }
        if(e.target.parentElement.getAttribute('data-icon') == 'heart'){
            if(getComputedStyle( e.target.parentElement).color == 'rgb(190, 182, 171)'){
                e.target.parentElement.style.color = '#c84250';
            }else if(getComputedStyle( e.target.parentElement).color == 'rgb(200, 66, 80)'){
                e.target.parentElement.style.color = 'rgb(190, 182, 171)';
            }
        }
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
let bookmarkIsi = document.querySelector(".bookmark-isi");

bookmarkIsi.addEventListener('click', function(e){
    e.preventDefault();
    if(e.target.parentElement.parentElement.classList.contains('bookmark-trash')){
        let item = e.target.parentElement.parentElement.parentElement;
        let namaItem =item.querySelector('.bookmark-text h6').innerText;
        console.log(cartCard);
        console.log(namaItem)
        if(!cartCard.length == 0){
            cartCard = cartCard.filter(function(value){
            return (value.includes(namaItem)) ?'' : value
            });
            console.log(cartCard)
            let bookItemIsi = '';
            cartCard.forEach(function(c){
                bookItemIsi+=c;
            })
            let bookmarkIsi = document.querySelector(".bookmark-isi");
            bookmarkIsi.innerHTML = bookItemIsi;
        }
        let card = Array.from(document.querySelectorAll('.dashboard-card .card .card-atas .card-atas-text .card-judul'));
        card = card.filter(function(c){
        return (c.innerText.localeCompare(namaItem) == 0) ?c: ''
        })
        card = card[0].parentNode;
        card = card.parentNode;
        card = card.parentNode;
        let bookmark = card.querySelector('.bookmark-like .bookmark-icon svg');
        bookmark.style.color = '#beb6ab';


    }

});
let dashboardCard = document.querySelector(".dashboard-card");
let card =Array.from(document.querySelectorAll('.dashboard-card .card'));
console.log(card);
// category
let idCheck = [];
function category(checkBox){
    if(checkBox.checked){
        idCheck.push(checkBox.getAttribute('id'));
        card = card.map(function(c){
            for(let i = 0;i<idCheck.length;i++){
                if(c.getAttribute('id') == idCheck[i]){
                    return c;
                }else{
                    return ''
                }
            }
        });
        card = card.filter(function(c){
            return (c == '') ? '' :c
        })
        let cardIsi = '';
        card.forEach(function(c){
            console.log(c);
        });

    }


}






