let totalPrice = 0;

function addToTotal() {
    // Get the value from the input field
    let subPrice = document.getElementById("subprice").value;

    // Convert the input value to a number
    let inputNumber = parseFloat(subPrice);

    // Add the input value to the total price
    totalPrice += inputNumber;

    // Update the total price displayed on the page
    document.getElementById("totalPrice").textContent = totalPrice + "€";
}