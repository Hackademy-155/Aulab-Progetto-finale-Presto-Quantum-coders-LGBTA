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
