document.addEventListener('livewire:load', function () {
    Livewire.on('categorySelected', () => {
        let categorySelect = document.getElementById('category');
        categorySelect.querySelector('option[value=""]').disabled = true;
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const setupClickEvent = () => {
        const insertButton = document.getElementById('Insert');
        const audioElement = document.getElementById('audioInsert');

        if (insertButton) {
            insertButton.addEventListener('click', function () {
                audioElement.play();
            });
        }
    };

    setupClickEvent();

    Livewire.hook('message.processed', () => {
        setupClickEvent();
    });
});


let hamburgerMenu = document.querySelector('#hamburger-menu');
let yes = true;


hamburgerMenu.addEventListener('click', ()=>{
    if(yes==true){
        hamburgerMenu.classList.remove('navbar-toggler');
        hamburgerMenu.innerHTML= '';
        hamburgerMenu.innerHTML = '<span class=""><i class="bi bi-book text-light fs-3"></i></span>';
        hamburgerMenu.classList.add('border-light', 'bg-transparent', 'text-center');
        yes= false;
    }else{
        // hamburgerMenu.classList.add('navbar-toggler');
        hamburgerMenu.innerHTML= '';
        hamburgerMenu.classList.remove('ps-3', 'pb-3', 'text-center')
        hamburgerMenu.innerHTML = '<span class=""><i class="bi bi-list text-light fs-1"></i></span>';
        yes= true;
    }

});
