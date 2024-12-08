document.addEventListener('livewire:load', function () {
    Livewire.on('categorySelected', () => {
        let categorySelect = document.getElementById('category');
        categorySelect.querySelector('option[value=""]').disabled = true;
    });
});