document.addEventListener('DOMContentLoaded', () => {
    // Initialize basket from localStorage
    let basket = JSON.parse(localStorage.getItem('basket') || '[]');

    // Basket Component
    const basketComponent = document.querySelector('[data-component="basket"]');
    if (!basketComponent) {
        return;
    }

    const individualButton = basketComponent.querySelector('#btn-individual');
    const companyButton = basketComponent.querySelector('#btn-company');
    const priceElement = basketComponent.querySelector('[data-price-individual]');
    const addBtn = basketComponent.querySelector('#basket-add-btn');
    const contactBtn = basketComponent.querySelector('#basket-contact-btn');

    if (!individualButton || !companyButton || !priceElement) {
        return;
    }

    const individualPrice = priceElement.dataset.priceIndividual;
    const companyPrice = priceElement.dataset.priceCompany;

    function updatePrice(type) {
        if (type === 'individual') {
            priceElement.textContent = parseFloat(individualPrice);
            individualButton.classList.add('bg-black-100', 'text-white');
            individualButton.classList.remove('text-black-100/50');
            companyButton.classList.add('text-black-100/50');
            companyButton.classList.remove('bg-black-100', 'text-white');
            if (addBtn && contactBtn) {
                addBtn.classList.remove('hidden');
                contactBtn.classList.add('hidden');
            }
        } else {
            priceElement.textContent = parseFloat(companyPrice);
            companyButton.classList.add('bg-black-100', 'text-white');
            companyButton.classList.remove('text-black-100/50');
            individualButton.classList.add('text-black-100/50');
            individualButton.classList.remove('bg-black-100', 'text-white');
            if (addBtn && contactBtn) {
                addBtn.classList.add('hidden');
                contactBtn.classList.remove('hidden');
            }
        }
    }

    individualButton.addEventListener('click', () => updatePrice('individual'));
    companyButton.addEventListener('click', () => updatePrice('company'));

    // Set initial state
    updatePrice('individual');

    // Add to basket functionality
    function addToBasket(courseData) {
        // Check if course already exists in basket
        const existingCourse = basket.find(course => course.id === courseData.id);
        
        if (existingCourse) {
            existingCourse.quantity = (existingCourse.quantity || 1) + 1;
        } else {
            courseData.quantity = 1;
            basket.push(courseData);
        }
        
        // Save to localStorage
        localStorage.setItem('basket', JSON.stringify(basket));
        
        // Update UI
        updateBasketUI();
    }

    function removeFromBasket(courseId) {
        basket = basket.filter(course => course.id !== courseId);
        localStorage.setItem('basket', JSON.stringify(basket));
        updateBasketUI();
    }

    function updateBasketUI() {
        // Update basket count in header or other UI elements
        const basketCount = basket.reduce((total, course) => total + (course.quantity || 1), 0);
        
        // Update button texts based on basket state
        const buttons = document.querySelectorAll('[data-course]');
        buttons.forEach(button => {
            const courseData = JSON.parse(button.dataset.course);
            const isInBasket = basket.find(course => course.id === courseData.id);
            
            if (isInBasket) {
                button.textContent = 'Pridėta';
                button.disabled = true;
                button.classList.add('opacity-50');
            } else {
                button.textContent = 'Dėti į krepšelį';
                button.disabled = false;
                button.classList.remove('opacity-50');
            }
        });
        
        // You can add UI updates here
        console.log('Basket updated:', basket);
        console.log('Total items:', basketCount);
    }

    // Event delegation for "Dėti į krepšelį" buttons
    document.addEventListener('click', (e) => {
        const button = e.target.closest('[data-course]');
        if (button && !button.disabled) {
            const courseData = JSON.parse(button.dataset.course);
            addToBasket(courseData);
        }
    });

    // Initialize basket UI
    updateBasketUI();
}); 