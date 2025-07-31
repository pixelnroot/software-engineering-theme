const slider = document.getElementById('slider');
const dots = document.querySelectorAll('.dot');

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = parseInt(dot.dataset.index);
        slider.style.transform = `translateX(-${index * 100}%)`;

        // Update active dot color
        dots.forEach(d => d.classList.remove('bg-gray-800'));
        dot.classList.add('bg-gray-800');
    });
});

// Optionally: mark first dot as active on load
dots[0].classList.add('bg-gray-800');


// team section
const carousel = document.getElementById('carousel');
const cardWidth = 320 + 32; // w-80 (320px) + mx-4 (16*2=32)
let isAnimating = false;

function loopCarousel() {
    if (isAnimating) return;
    isAnimating = true;

    // Slide left by 1 card
    carousel.style.transform = `translateX(-${cardWidth}px)`;

    // After animation completes, reset transform and move first card to end
    setTimeout(() => {
        carousel.appendChild(carousel.children[0]); // Move first card to end
        carousel.style.transition = 'none';
        carousel.style.transform = 'translateX(0)';
        // Force reflow to restart transition
        void carousel.offsetWidth;
        carousel.style.transition = 'transform 0.5s ease-in-out';
        isAnimating = false;
    }, 500); // match the transition duration
}

setInterval(loopCarousel); // every 3s