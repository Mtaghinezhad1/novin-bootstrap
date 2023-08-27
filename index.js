const comments = document.getElementsByClassName('comment-container');
const topAds = document.getElementById('topAds');
const topAdsBtn = document.getElementById('topAdsBtn');
const header = document.getElementById('header-sticky');
let positionY = 0;


// event listener for topAds
topAdsBtn.addEventListener("click", ()=>{
    topAds.classList.add('d-none')
})

// event listener for header tag
document.addEventListener('scroll', ev => {
    if (window.pageYOffset > 399){
        header.classList.remove('d-none');
        header.classList.add('d-block');
        header.classList.add('position-fixed');
    }else {
        header.classList.add('d-none');
        header.classList.remove('d-block');
        header.classList.remove('position-fixed');
    }


    if (window.pageYOffset > positionY) {
        header.style.top = '-150px';
    } else {
        header.style.top = '0px';

    }
    positionY = window.pageYOffset
})

