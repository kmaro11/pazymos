document.addEventListener('DOMContentLoaded', () => {
    // Initialize basket from localStorage
    let basket = JSON.parse(localStorage.getItem('basket') || '[]');

    // Basket Component (only on pages that have it)
    const basketComponent = document.querySelector('[data-component="basket"]');
    console.log('wtf', basketComponent);
    
    if (basketComponent) {
        const individualButton = basketComponent.querySelector('#btn-individual');
        const companyButton = basketComponent.querySelector('#btn-company');
        const priceElement = basketComponent.querySelector('[data-price-individual]');
        const addBtn = basketComponent.querySelector('#basket-add-btn');
        const contactBtn = basketComponent.querySelector('#basket-contact-btn');

        if (individualButton && companyButton && priceElement) {
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
        }
    }



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
        renderBasketPage(); // Re-render basket page
    }
    
    // Make removeFromBasket global so it can be called from HTML
    window.removeFromBasket = removeFromBasket;

    function updateBasketUI() {
        // Update basket count in header or other UI elements
        const basketCount = basket.reduce((total, course) => total + (course.quantity || 1), 0);
        
        // Calculate total price
        const totalPrice = basket.reduce((total, course) => {
            const price = parseFloat(course.price) || 0;
            const quantity = course.quantity || 1;
            return total + (price * quantity);
        }, 0);
        
        // Update all elements with data-basket-count attribute
        const basketCountElements = document.querySelectorAll('[data-basket-count]');
        basketCountElements.forEach(element => {
            // Check if element is in basket-calculation component
            const isInCalculation = element.closest('.bg-blue-100');
            
            if (isInCalculation) {
                // For basket calculation, show "X prekės" format
                element.textContent = `${basketCount} prekės`;
            } else {
                // For other elements, show just the number
                element.textContent = basketCount;
                
                // Hide element if count is 0, show if count > 0
                if (basketCount === 0) {
                    element.classList.add('hidden');
                } else {
                    element.classList.remove('hidden');
                }
            }
        });
        
        // Update all elements with data-basket-price attribute
        const basketPriceElements = document.querySelectorAll('[data-basket-price]');
        basketPriceElements.forEach(element => {
            element.textContent = totalPrice.toFixed(2) + ' €';
        });
        
        // Update payment button visibility
        const paymentButton = document.getElementById('payment-button');
        if (paymentButton) {
            if (basketCount === 0) {
                paymentButton.classList.add('hidden');
            } else {
                paymentButton.classList.remove('hidden');
            }
        }
        
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
    
    // Render basket page if we're on basket page
    function renderBasketPage() {
        console.log('renderBasketPage called'); // Debug
        const basketContainer = document.getElementById('basket-container');
        if (!basketContainer) {
            console.log('basket-container not found'); // Debug
            return;
        }
        
        if (basket.length === 0) {
            basketContainer.innerHTML = '<p class="text-center text-gray-500 py-8">Krepšelis tuščias</p>';
            return;
        }
        
        const basketHTML = basket.map(course => `
            <li class="flex items-start border border-gray-400 rounded-[20px] bg-gray-300 pl-[22px] pr-6 py-6 mb-4">
                <div class="flex-grow-1 flex-shrink-0 bg-[#E7E7E7] rounded-[12px] md:rounded-[20px] h-12 w-12 md:h-[68px] md:w-[68px] flex items-center justify-center mr-3 md:mr-6">
                    <div class="w-4 h-4 md:w-6 md:h-6">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.24136V1.00134C12.8323 0.999915 12.6543 0.999966 12.4633 1.00002L10.3572 1.00004C9.27341 1.00003 8.39926 1.00002 7.69138 1.05786C6.96253 1.11741 6.32234 1.24322 5.73005 1.54501C4.78924 2.02438 4.02434 2.78928 3.54497 3.73009C3.24318 4.32238 3.11737 4.96257 3.05782 5.69142C2.99998 6.39927 2.99999 7.2734 3 8.35711V15.6429C2.99999 16.7266 2.99998 17.6008 3.05782 18.3087C3.11737 19.0376 3.24318 19.6777 3.54497 20.27C4.02434 21.2108 4.78924 21.9757 5.73005 22.4551C6.32234 22.7569 6.96253 22.8827 7.69138 22.9423C8.39923 23.0001 9.27344 23.0001 10.3572 23.0001H13.6429C14.7267 23.0001 15.6008 23.0001 16.3086 22.9423C17.0375 22.8827 17.6777 22.7569 18.27 22.4551C19.2108 21.9757 19.9757 21.2108 20.455 20.27C20.7568 19.6777 20.8826 19.0376 20.9422 18.3087C21 17.6009 21 16.7266 21 15.6429V9.53707C21.0001 9.34599 21.0001 9.16785 20.9987 9.00006H18.7587C17.9537 9.00007 17.2894 9.00008 16.7482 8.95587C16.1861 8.90994 15.6694 8.81138 15.184 8.56409C14.4314 8.18059 13.8195 7.56867 13.436 6.81602C13.1887 6.33069 13.0901 5.81398 13.0442 5.25189C13 4.71069 13 4.04633 13 3.24136ZM8 12C7.44772 12 7 12.4477 7 13C7 13.5523 7.44772 14 8 14H16C16.5523 14 17 13.5523 17 13C17 12.4477 16.5523 12 16 12H8ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H8Z" fill="#0E0126" />
                            <path d="M15 3.20006V1.28254C15.3333 1.39959 15.6537 1.55178 15.9556 1.73684C16.4615 2.04681 16.8862 2.47173 17.4997 3.08544L18.9132 4.49897C19.5277 5.11309 19.953 5.53818 20.2632 6.0444C20.4483 6.3464 20.6005 6.66679 20.7175 7.00006H18.8C17.9434 7.00006 17.3611 6.99928 16.911 6.96251C16.4726 6.92669 16.2484 6.86176 16.092 6.78207C15.7157 6.59033 15.4097 6.28436 15.218 5.90804C15.1383 5.75164 15.0734 5.52744 15.0376 5.08902C15.0008 4.63893 15 4.05664 15 3.20006Z" fill="#0E0126" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <h3 class="md:mb-[22px] text-black-100 text-lg font-medium leading-6">${course.title}</h3>
                    <div class="flex flex-wrap items-center gap-2.5">
                        ${course.tags.map(tag => `<div class="bg-white rounded-[100px] px-3 text-black-100 text-sm font-medium leading-6">${tag}</div>`).join('')}
                    </div>
                </div>
                <div>
                    <button class="flex items-center gap-1.5 ml-auto" onclick="removeFromBasket(${course.id})">
                        <img src="/svg/delete.svg" alt="delete">
                        <span class="text-green text-sm font-medium leading-[22px]">Pašalinti</span>
                    </button>
                </div>
            </li>
        `).join('');
        
        basketContainer.innerHTML = `<ul class="space-y-4">${basketHTML}</ul>`;
        console.log('Basket rendered with', basket.length, 'items'); // Debug
    }
    
    // Initialize basket page if we're on it
    console.log('Initializing basket page...'); // Debug
    renderBasketPage();
}); 