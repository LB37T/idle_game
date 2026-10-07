let money = 0;
let productionPerSecond = 0;
let generators = 0;

const generatorBasePrice = 10;

function getGeneratorPrice() {
    return Math.floor(generatorBasePrice * Math.pow(1.15, generators));
}

function updateDisplay() {
    document.getElementById("money").textContent = Math.floor(money);
    document.getElementById("production").textContent = productionPerSecond;
    document.getElementById("generators").textContent = generators;
    document.getElementById("generator-price").textContent = getGeneratorPrice();
}

document.getElementById("collect").addEventListener("click", () => {
    money += 1;
    updateDisplay();
});

document.getElementById("buy-generator").addEventListener("click", () => {
    const price = getGeneratorPrice();

    if (money < price) return;

    money -= price;
    generators += 1;
    productionPerSecond += 1;
    updateDisplay();
});

setInterval(() => {
    money += productionPerSecond;
    updateDisplay();
}, 1000);

updateDisplay();
