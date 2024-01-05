document.addEventListener('DOMContentLoaded', function() {
    var dropdownButton = document.getElementById('dropdownDefaultButton');
    var dropdownMenu = document.getElementById('dropdown');
    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });
});

//// modal toggle

document.addEventListener('DOMContentLoaded', function() {
    // Get the modal button and modal itself
    var modalButton = document.querySelector('[data-modal-toggle="authentication-modal"]');
    var modal = document.getElementById('authentication-modal');

    // Add click event listener to the modal button
    modalButton.addEventListener('click', function() {
        toggleModal();
    });

    // Function to toggle the modal visibility
    function toggleModal() {
        modal.classList.toggle('hidden');
    }

    // Get all elements with the data-modal-hide attribute
    var closeButtons = document.querySelectorAll('[data-modal-hide="authentication-modal"]');

    // Add click event listeners to close buttons
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            toggleModal();
        });
    });

    // Close the modal when clicking outside of it
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            toggleModal();
        }
    });

    // Prevent the modal from closing when clicking inside it
    modal.querySelector('.relative').addEventListener('click', function(event) {
        event.stopPropagation();
    });
});