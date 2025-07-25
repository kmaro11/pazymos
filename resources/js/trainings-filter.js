document.addEventListener('DOMContentLoaded', () => {
    console.log('Trainings filter script loaded'); // Debug
    
    // Get all necessary elements
    const trainingCards = document.querySelectorAll('[data-training]');
    const tabButtons = document.querySelectorAll('[data-tab]');
    const searchInput = document.querySelector('[data-search-input]');
    const loadMoreButton = document.querySelector('[data-load-more]');
    
    // Store original trainings data
    let originalTrainings = [];
    let filteredTrainings = [];
    let currentTab = 'all';
    let currentSearch = '';
    let visibleCount = 6; // Show 6 items initially
    
    // Initialize trainings data
    function initializeTrainings() {
        trainingCards.forEach((card, index) => {
            // Find the span element that contains only the title (not the labels)
            const titleElement = card.querySelector('span[data-training-title]');
            const title = titleElement ? titleElement.textContent.trim() : '';
            console.log('Title found:', title);
            const filtersElement = card.querySelector('[data-training-filters]');
            
            const trainingData = {
                element: card,
                title: title,
                filters: filtersElement ? filtersElement.dataset.trainingFilters.split(',').map(f => f.trim()) : [],
                index: index
            };
            
            console.log('Training data:', trainingData); // Debug
            originalTrainings.push(trainingData);
        });
        filteredTrainings = [...originalTrainings];
    }
    
    // Filter trainings based on tab and search
    function filterTrainings() {
        let filtered = originalTrainings;
        
        // Filter by tab
        if (currentTab !== 'all') {
            filtered = filtered.filter(training => 
                training.filters.some(filter => filter.toLowerCase() === currentTab.toLowerCase())
            );
        }
        
        // Filter by search
        if (currentSearch.trim() !== '') {
            const searchTerm = currentSearch.toLowerCase();
            filtered = filtered.filter(training =>
                training.title.toLowerCase().includes(searchTerm)
            );
        }
        
        filteredTrainings = filtered;
        updateVisibleTrainings();
    }
    
    // Update visible trainings
    function updateVisibleTrainings() {
        const visibleTrainings = filteredTrainings.slice(0, visibleCount);
        const noResultsElement = document.getElementById('no-results');
        
        // Hide all trainings
        originalTrainings.forEach(training => {
            training.element.style.display = 'none';
        });
        
        // Show filtered trainings
        visibleTrainings.forEach(training => {
            training.element.style.display = '';
        });
        
        // Show/hide no results message
        if (noResultsElement) {
            if (filteredTrainings.length === 0) {
                noResultsElement.classList.remove('hidden');
            } else {
                noResultsElement.classList.add('hidden');
            }
        }
        
        // Update load more button
        if (loadMoreButton) {
            if (visibleTrainings.length >= filteredTrainings.length) {
                loadMoreButton.style.display = 'none';
            } else {
                loadMoreButton.style.display = '';
            }
        }
        
        // Update results count
        updateResultsCount();
    }
    
    // Update results count
    function updateResultsCount() {
        const resultsCountElement = document.querySelector('[data-results-count]');
        if (resultsCountElement) {
            resultsCountElement.textContent = `${filteredTrainings.length} rezultatų`;
        }
    }
    
    // Tab click handler
    function handleTabClick(event) {
        const clickedTab = event.target;
        const tabValue = clickedTab.dataset.tab;
        
        // Update active tab
        tabButtons.forEach(button => {
            button.classList.remove('active');
            button.classList.remove('bg-green-100');
            button.classList.add('bg-white');
        });
        clickedTab.classList.add('active');
        clickedTab.classList.add('bg-green-100');
        clickedTab.classList.remove('bg-white');
        
        // Update current tab and filter
        currentTab = tabValue;
        visibleCount = 6; // Reset visible count
        filterTrainings();
    }
    
    // Search input handler
    function handleSearchInput(event) {
        currentSearch = event.target.value;
        visibleCount = 6; // Reset visible count
        filterTrainings();
    }
    
    // Load more handler
    function handleLoadMore() {
        visibleCount += 6;
        updateVisibleTrainings();
    }
    
    // Clear search handler
    function handleClearSearch() {
        if (searchInput) {
            searchInput.value = '';
        }
        currentSearch = '';
        visibleCount = 6; // Reset visible count
        filterTrainings();
    }
    
    // Add event listeners
    function addEventListeners() {
        // Tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', handleTabClick);
        });
        
        // Search input
        if (searchInput) {
            searchInput.addEventListener('input', handleSearchInput);
        }
        
        // Load more button
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', handleLoadMore);
        }
        
        // Clear search button
        const clearSearchButton = document.querySelector('#no-results button');
        if (clearSearchButton) {
            clearSearchButton.addEventListener('click', handleClearSearch);
        }
    }
    
    // Initialize
    function init() {
        if (trainingCards.length > 0) {
            console.log('Found training cards, initializing...'); // Debug
            initializeTrainings();
            addEventListeners();
            filterTrainings();
            
            // Set initial active tab
            const firstTab = document.querySelector('[data-tab="all"]');
            if (firstTab) {
                firstTab.classList.add('active');
                firstTab.classList.add('bg-green-100');
                firstTab.classList.remove('bg-white');
            }
        } else {
            console.log('No training cards found'); // Debug
        }
    }
    
    // Start the application
    init();
}); 