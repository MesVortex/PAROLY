document.addEventListener('DOMContentLoaded', function() {
    var dropdownButton = document.getElementById('dropdownDefaultButton');
    var dropdownMenu = document.getElementById('dropdown');
    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });
});