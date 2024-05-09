let TrendingSlider = document.querySelector('.Trending .TrendingImageList');

let TrendingItems = document.querySelectorAll('.Trending .TrendingImageList .item');

let TrendingNext = document.getElementById('next');

let TrendingPrev = document.getElementById('prev');

let BoxContainer = document.querySelectorAll('.Trending .dots li');

let TrendingLengthItems = TrendingItems.length - 1;
let TrendingAuto = 0;


TrendingNext.onclick = function(){
    if(TrendingAuto + 1 > TrendingLengthItems){
        TrendingAuto = 0;
    }else{
        TrendingAuto = TrendingAuto + 1;
    }
    TrendingReloadSlider();
}

TrendingPrev.onclick = function(){
    if(TrendingAuto - 1 > TrendingLengthItems){
        TrendingAuto = 0;
    }else{
        TrendingAuto = TrendingAuto - 1;
    }
    TrendingReloadSlider();
}

let TrendingNextImage = setInterval(()=> {TrendingNext.click()}, 5000);

function TrendingReloadSlider(){
    TrendingSlider.style.left = -TrendingItems[TrendingAuto].offsetLeft + 'px';
    
    let last_active_dot = document.querySelector('.Trending .dots li.auto');
    last_active_dot.classList.remove('auto');
    BoxContainer[TrendingAuto].classList.add('auto');

    clearInterval(TrendingNextImage);
    TrendingNextImage = setInterval(()=> {TrendingNext.click()}, 5000);

    
}

BoxContainer.forEach((li , key) => {
    li.addEventListener('click', function(){
        TrendingAuto = key;
        TrendingReloadSlider();
    })
})

let DiscoverSlider = document.querySelector('.Discover .DiscoverImageList');

let DiscoverItems = document.querySelectorAll('.Discover .DiscoverImageList .item');

let DiscoverNext = document.getElementById('DiscoverNext');

let DiscoverPrev = document.getElementById('DiscoverPrev');

let DiscoverBoxContainer = document.querySelectorAll('.Discover .dots li');

let DiscoverLengthItems = DiscoverItems.length - 1;
let DiscoverAuto = 0;

DiscoverNext.onclick = function(){
    if(DiscoverAuto + 1 > DiscoverLengthItems){
        DiscoverAuto = 0;
    }else{
        DiscoverAuto = DiscoverAuto + 1;
    }
    DiscoverReloadSlider();
}

DiscoverPrev.onclick = function(){
    if(DiscoverAuto - 1 > DiscoverLengthItems){
        DiscoverAuto = 0;
    }else{
        DiscoverAuto = DiscoverAuto - 1;
    }
    DiscoverReloadSlider();
}

let DiscoverNextImage = setInterval(()=> {DiscoverNext.click()}, 5000);

function DiscoverReloadSlider(){
    DiscoverSlider.style.left = -DiscoverItems[DiscoverAuto].offsetLeft + 'px';
    
    let last_active_dot = document.querySelector('.Discover .dots li.auto');
    last_active_dot.classList.remove('auto');
    DiscoverBoxContainer[DiscoverAuto].classList.add('auto');

    clearInterval(DiscoverNextImage);
    DiscoverNextImage = setInterval(()=> {DiscoverNext.click()}, 5000);

    
}

DiscoverBoxContainer.forEach((li , key) => {
    li.addEventListener('click', function(){
        DiscoverAuto = key;
        DiscoverReloadSlider();
    })
})

let UserAccountCircle = document.getElementById('UserAccountCircle');

let AccountMenuModal = document.getElementById('AccountMenuModal');

let on = 0;

document.getElementById('UserAccountCircle').addEventListener("click", function(){
    if(on == 0){
    
        AccountMenuModal.style.display = 'flex';
        on = 1;
        
    }else{
        $("#AccountMenuModal").fadeOut("slow");
        on = 1 * 0;
    }
})