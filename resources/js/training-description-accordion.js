document.addEventListener('DOMContentLoaded', function() {
    const accordion = document.getElementById('training-desc-accordion');

    if (!accordion) return;

    accordion.addEventListener('click', function(e) {
        const questionButton = e.target.closest('.td-accordion-question');
        if (!questionButton) return;

        const item = questionButton.parentElement;
        const answerContainer = item.querySelector('.td-accordion-answer');
        const isActive = item.classList.contains('active');

        const allItems = accordion.querySelectorAll('.td-accordion-item');
        allItems.forEach(other => {
            if (other !== item) {
                other.classList.remove('active');
                other.querySelector('.td-accordion-answer').style.maxHeight = '0';
            }
        });

        if (isActive) {
            item.classList.remove('active');
            answerContainer.style.maxHeight = '0';
        } else {
            item.classList.add('active');
            answerContainer.style.maxHeight = '2000px';
        }
    });

    const firstItem = accordion.querySelector('.td-accordion-item');
    if (firstItem) {
        firstItem.classList.add('active');
        firstItem.querySelector('.td-accordion-answer').style.maxHeight = '2000px';
    }
});
