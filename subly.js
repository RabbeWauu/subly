let totalPrice = 0;

function addToTotal() {
    // Get the value from the input field
    let inputValue = document.getElementById("inputField").value;

    // Convert the input value to a number
    let inputNumber = parseFloat(inputValue);

    // Add the input value to the total price
    totalPrice += inputNumber;

    // Update the total price displayed on the page
    document.getElementById("totalPrice").textContent = totalPrice + "€";
}