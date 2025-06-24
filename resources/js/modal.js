const buttons = document.querySelectorAll('.open-modal');
const modal = document.getElementById('modal');
const closeButton = document.getElementById('modal-close');

if (buttons.length > 0 && modal) {
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });
    });

    closeButton.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    modal.addEventListener('mousedown', function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
}