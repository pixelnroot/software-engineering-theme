const slider = document.getElementById("slider");

function pauseSlider() {
    slider.classList.add("paused");
}

function resumeSlider() {
    slider.classList.remove("paused");
}