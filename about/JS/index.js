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
