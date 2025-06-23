// This file will contain the JavaScript logic for the custom select component.
document.addEventListener('DOMContentLoaded', () => {
    const selectWrappers = document.querySelectorAll('.custom-select-wrapper');

    selectWrappers.forEach(wrapper => {
        const trigger = wrapper.querySelector('.custom-select-trigger');
        const options = wrapper.querySelector('.custom-select-options');
        const valueInput = wrapper.querySelector('.custom-select-value');
        const triggerText = wrapper.querySelector('.custom-select-text');
        const optionItems = wrapper.querySelectorAll('.custom-pointer');

        trigger.addEventListener('click', () => {
            options.classList.toggle('hidden');
        });

        optionItems.forEach(option => {
            option.addEventListener('click', () => {
                const selectedValue = option.getAttribute('data-value');
                const selectedLabel = option.textContent.trim();
                
                valueInput.value = selectedValue;
                triggerText.textContent = selectedLabel;
                
                // Change text color from placeholder to selected state
                triggerText.classList.remove('text-black-100/50');
                triggerText.classList.add('text-black-100');
                
                options.classList.add('hidden');

                // Optional: add a 'selected' class for styling the chosen option
                optionItems.forEach(item => item.classList.remove('bg-black-100/10'));
                option.classList.add('bg-black-100/10');
            });
        });
    });

    // Global click listener to close all custom selects when clicking outside
    document.addEventListener('click', (e) => {
        selectWrappers.forEach(wrapper => {
            if (!wrapper.contains(e.target)) {
                wrapper.querySelector('.custom-select-options').classList.add('hidden');
            }
        });
    });
}); 