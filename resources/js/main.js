document.addEventListener('livewire:load', function () {
    Livewire.on('categorySelected', () => {
        let categorySelect = document.getElementById('category');
        categorySelect.querySelector('option[value=""]').disabled = true;
    });
});

// const insertButton = document.getElementById('Insert');
// const audioElement = document.getElementById('audioInsert');
// if(insertButton){

//     document.addEventListener('DOMContentLoaded', function () {
//         const setupClickEvent = () => {

//             // if (insertButton) {
//                 insertButton.addEventListener('click', function () {
//                     audioElement.play();
//                 });
//             // }
//         };

//         setupClickEvent();

//         Livewire.hook('message.processed', () => {
//             setupClickEvent();
//         });
//     });
// }


let eyeBtn = document.querySelector('#eyeBtn');
let password = document.querySelector('#password');
let eyeControl = true;

if(eyeBtn){
    eyeBtn.addEventListener('click', ()=>{
        if(eyeControl == true) {
            password.setAttribute('type', 'text');
            eyeBtn.innerHTML = "";
            eyeBtn.innerHTML = "<i class='bi bi-eye-slash'></i>"
            eyeControl = false;
        }else if (eyeControl == false){
            password.setAttribute('type', 'password');
            eyeBtn.innerHTML = "";
            eyeBtn.innerHTML = "<i class='bi bi-eye'></i>"
            eyeControl = true;
        }
    })
}


let eyeBtnConfirmation = document.querySelector('#eyeBtnConfirmation');
let passwordConfirmation = document.querySelector('#password_confirmation');
let eyeControlConfirmation = true;

if(eyeBtnConfirmation){
    eyeBtnConfirmation.addEventListener('click', ()=>{
        if(eyeControlConfirmation == true) {
            passwordConfirmation.setAttribute('type', 'text');
            eyeBtnConfirmation.innerHTML = "";
            eyeBtnConfirmation.innerHTML = "<i class='bi bi-eye-slash'></i>"
            eyeControlConfirmation = false;
        }else if (eyeControlConfirmation == false){
            passwordConfirmation.setAttribute('type', 'password');
            eyeBtnConfirmation.innerHTML = "";
            eyeBtnConfirmation.innerHTML = "<i class='bi bi-eye'></i>"
            eyeControlConfirmation = true;
        }
    })
}




let hamburgerMenu = document.querySelector('#hamburger-menu');
let yes = true;

if(hamburgerMenu){
    hamburgerMenu.addEventListener('click', () => {
        if (yes == true) {
            // hamburgerMenu.classList.remove('navbar-toggler');
            hamburgerMenu.innerHTML = '';
            hamburgerMenu.innerHTML = '<i class="bi bi-book text-light fs-1 "></i>';
            hamburgerMenu.classList.add('border-0','bg-transparent', 'ms-2');
            yes = false;
        } else {
            // hamburgerMenu.classList.add('navbar-toggler');
            hamburgerMenu.innerHTML = '';
            // hamburgerMenu.classList.remove('ps-3', 'pb-3', 'text-center')
            hamburgerMenu.innerHTML = '<i class="bi bi-list text-light fs-1"></i>';
            yes = true;
        }
    });
}

let mycarousel = document.querySelector('#myCarousel');
if(mycarousel){

    $('#myCarousel').carousel({
        interval: false
    });
    $('#carousel-thumbs').carousel({
        interval: false
    });

    // handles the carousel thumbnails
    // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr('id');
        var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
        $('#myCarousel').carousel(id);
    });
    // Only display 3 items in nav on mobile.
    if ($(window).width() < 575) {
        $('#carousel-thumbs .row div:nth-child(4)').each(function () {
            var rowBoundary = $(this);
            $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
        });
        $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function () {
            var boundary = $(this);
            $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
        });
    }
    // Hide slide arrows if too few items.
    if ($('#carousel-thumbs .carousel-item').length < 2) {
        $('#carousel-thumbs [class^=carousel-control-]').remove();
        $('.machine-carousel-container #carousel-thumbs').css('padding', '0 5px');
    }
    // when the carousel slides, auto update
    $('#myCarousel').on('slide.bs.carousel', function (e) {
        var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
        $('[id^=carousel-selector-]').removeClass('selected');
        $('[id=carousel-selector-' + id + ']').addClass('selected');
    });
    // when user swipes, go next or previous
    $('#myCarousel').swipe({
        fallbackToMouseEvents: true,
        swipeLeft: function (e) {
            $('#myCarousel').carousel('next');
        },
        swipeRight: function (e) {
            $('#myCarousel').carousel('prev');
        },
        allowPageScroll: 'vertical',
        preventDefaultEvents: false,
        threshold: 75
    });


    $('#myCarousel .carousel-item img').on('click', function (e) {
        var src = $(e.target).attr('data-remote');
        if (src) $(this).ekkoLightbox();
    });
}
