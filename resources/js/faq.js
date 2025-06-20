document.addEventListener('DOMContentLoaded', function() {
    const accordion = document.getElementById('faq-accordion');
    
    if (!accordion) return;

    accordion.addEventListener('click', function(e) {
        const questionButton = e.target.closest('.faq-question');
        if (!questionButton) return;

        const faqItem = questionButton.parentElement;
        const answerContainer = faqItem.querySelector('.faq-answer-container');
        const isActive = faqItem.classList.contains('active');

        // Close all other items
        const allItems = accordion.querySelectorAll('.faq-item');
        allItems.forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
                const container = item.querySelector('.faq-answer-container');
                container.style.maxHeight = '0';
            }
        });

        // Toggle current item
        if (isActive) {
            faqItem.classList.remove('active');
            answerContainer.style.maxHeight = '0';
        } else {
            faqItem.classList.add('active');
            // Set a large max-height to ensure content fits
            answerContainer.style.maxHeight = '500px';
        }
    });

    // Open the first item by default
    const firstItem = accordion.querySelector('.faq-item');
    if (firstItem) {
        firstItem.classList.add('active');
        firstItem.querySelector('.faq-answer-container').style.maxHeight = '500px';
    }
}); 