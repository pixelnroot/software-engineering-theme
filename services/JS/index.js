const toggleButton = document.getElementById("toggle");
const circle = document.getElementById('circle')
const prices = document.querySelectorAll(".price");
const durations = document.querySelectorAll(".duration");
let isMonthly = true;

toggleButton.addEventListener("click", () => {
    isMonthly = !isMonthly;
    if (isMonthly) {
        circle.classList.remove("translate-x-6");
    } else {
        circle.classList.add("translate-x-6");
    }

    prices.forEach(price => {
        const newPrice = isMonthly ? price.dataset.monthly : price.dataset.yearly;
        price.textContent = newPrice;
    });

    durations.forEach(d => {
        d.textContent = isMonthly ? "/mo" : "/yr";
    });
});