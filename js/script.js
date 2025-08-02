document.addEventListener('DOMContentLoaded', function () {
    // Quantity selector functionality
    const qtyBtns = document.querySelectorAll('.qty-btn');
    const qtyInput = document.querySelector('.qty-input');

    qtyBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const currentValue = parseInt(qtyInput.value) || 1;

            if (this.textContent === '+') {
                qtyInput.value = currentValue + 1;
            } else if (this.textContent === '-' && currentValue > 1) {
                qtyInput.value = currentValue - 1;
            }
        });
    });

    // Thumbnail image selection
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function () {
            // Remove active class from all thumbnails
            thumbnails.forEach(t => t.classList.remove('active'));
            // Add active class to clicked thumbnail
            this.classList.add('active');
        });
    });

    // Add to cart button
    const addToCartBtn = document.querySelector('.add-to-cart-btn');

    if (addToCartBtn) {
        addToCartBtn.addEventListener('click', function () {
            // Simple feedback
            const originalText = this.textContent;
            this.textContent = 'Added!';
            this.style.backgroundColor = '#45b382';

            setTimeout(() => {
                this.textContent = originalText;
                this.style.backgroundColor = '#4ec791';
            }, 2000);
        });
    }

    // Favorite button toggle
    const favoriteBtn = document.querySelector('.favorite-btn');
    let isFavorite = false;

    if (favoriteBtn) {
        favoriteBtn.addEventListener('click', function () {
            isFavorite = !isFavorite;
            const span = this.querySelector('span');

            if (isFavorite) {
                span.textContent = 'Saved as favourite';
                this.style.backgroundColor = '#f0f8ff';
                this.style.borderColor = '#4ec791';
            } else {
                span.textContent = 'Save as favourite';
                this.style.backgroundColor = 'white';
                this.style.borderColor = '#bbbcbc';
            }
        });
    }

    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    const newsletterInput = document.querySelector('.newsletter-input');
    const newsletterBtn = document.querySelector('.newsletter-btn');

    if (newsletterBtn) {
        newsletterBtn.addEventListener('click', function (e) {
            e.preventDefault();

            const email = newsletterInput.value.trim();

            if (email && email.includes('@')) {
                const originalText = this.textContent;
                this.textContent = 'SIGNED UP!';
                this.style.backgroundColor = '#45b382';
                newsletterInput.value = '';

                setTimeout(() => {
                    this.textContent = originalText;
                    this.style.backgroundColor = '#ffc166';
                }, 3000);
            } else {
                alert('Please enter a valid email address');
            }
        });
    }

    // Search functionality
    const searchInput = document.querySelector('.search-input');
    const searchButton = document.querySelector('.search-button');

    if (searchButton) {
        searchButton.addEventListener('click', function () {
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                alert(`Searching for: ${searchTerm}`);
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchButton.click();
            }
        });
    }

    // Mobile menu toggle (basic implementation)
    const menuBtn = document.querySelector('.action-btn:last-child');
    const navigation = document.querySelector('.navigation');

    if (menuBtn) {
        menuBtn.addEventListener('click', function () {
            navigation.style.display = navigation.style.display === 'none' ? 'block' : 'none';
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Simple image gallery navigation
    const imageNavBtn = document.querySelector('.image-nav-btn');
    let currentImageIndex = 0;
    const totalImages = 3; // Assuming 3 images

    if (imageNavBtn) {
    imageNavBtn.addEventListener('click', function () {
        currentImageIndex = (currentImageIndex + 1) % totalImages;
        // In a real implementation, you would change the main image source here
        console.log(`Showing image ${currentImageIndex + 1}`);
    });}

    // Color selector dropdown simulation
    const colorSelector = document.querySelector('.color-selector');

    if (colorSelector) {
    colorSelector.addEventListener('click', function () {
        alert('Color options would be shown here');
    });}

    // Review interactions (like/dislike)
    document.querySelectorAll('.review-item').forEach(review => {
        // Add simple interaction buttons to reviews
        const reviewContent = review.querySelector('.review-content');
        if (reviewContent && !review.querySelector('.review-actions')) {
            const actionsDiv = document.createElement('div');
            actionsDiv.className = 'review-actions';
            actionsDiv.style.marginTop = '12px';
            actionsDiv.innerHTML = `
                <button class="review-action-btn" data-action="like">👍 0</button>
                <button class="review-action-btn" data-action="dislike">👎 0</button>
                <button class="review-action-btn" data-action="share">📤</button>
            `;
            reviewContent.appendChild(actionsDiv);
        }
    });

    // Handle review action buttons
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('review-action-btn')) {
            const action = e.target.dataset.action;
            const currentText = e.target.textContent;

            if (action === 'like' || action === 'dislike') {
                const count = parseInt(currentText.match(/\d+/)[0]) + 1;
                e.target.textContent = currentText.replace(/\d+/, count);
            } else if (action === 'share') {
                alert('Share functionality would be implemented here');
            }
        }
    });
});

// Add some CSS for the dynamically created review actions
const style = document.createElement('style');
style.textContent = `
    .review-actions {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    
    .review-action-btn {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 12px;
        color: #666;
        padding: 4px 8px;
        border-radius: 4px;
        transition: background-color 0.2s;
    }
    
    .review-action-btn:hover {
        background-color: #f5f5f5;
    }
`;
document.head.appendChild(style);