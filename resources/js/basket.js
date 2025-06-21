document.addEventListener('DOMContentLoaded', () => {
    const basketComponent = document.querySelector('[data-component="basket"]');
    if (!basketComponent) {
        return;
    }

    const individualButton = basketComponent.querySelector('#btn-individual');
    const companyButton = basketComponent.querySelector('#btn-company');
    const priceElement = basketComponent.querySelector('[data-price-individual]');

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
        } else {
            priceElement.textContent = parseFloat(companyPrice);
            companyButton.classList.add('bg-black-100', 'text-white');
            companyButton.classList.remove('text-black-100/50');
            individualButton.classList.add('text-black-100/50');
            individualButton.classList.remove('bg-black-100', 'text-white');
        }
    }

    individualButton.addEventListener('click', () => updatePrice('individual'));
    companyButton.addEventListener('click', () => updatePrice('company'));

    // Set initial state
    updatePrice('individual');
}); 