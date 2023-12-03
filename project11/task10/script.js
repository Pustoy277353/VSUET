var products = [
    { name: "Стол письменный", price: 12000, quantity: 5 },
    { name: "Стол кухонный", price: 8000, quantity: 10 },
    { name: "Стул", price: 20, quantity: 1200 },
    { name: "Шкаф книжный", price: 14200, quantity: 4 },
];

window.onload = function () {
    updateTable();
    updateProductList();
};

function updateTable() {
    var tableBody = document.querySelector("#productTable tbody");
    var totalAmount = 0;

    tableBody.innerHTML = "";

    products.forEach(function (product) {
        var row = tableBody.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = product.name;
        cell2.innerHTML = product.price;
        cell3.innerHTML = product.quantity;
        cell4.innerHTML = product.price * product.quantity;

        totalAmount += product.price * product.quantity;
    });

    document.getElementById("totalAmount").textContent = totalAmount;
}

function updateProductList() {
    var select = document.getElementById("productName");

    select.innerHTML = "";

    products.forEach(function (product) {
        var option = document.createElement("option");
        option.value = product.name;
        option.textContent = product.name;
        select.appendChild(option);
    });
}

function updateProduct() {
    var selectedProduct = document.getElementById("productName").value;
    var newPrice = parseFloat(document.getElementById("productPrice").value);
    var newQuantity = parseInt(document.getElementById("productQuantity").value, 10);

    for (var i = 0; i < products.length; i++) {
        if (products[i].name === selectedProduct) {
            products[i].price = newPrice;
            products[i].quantity = newQuantity;
            break;
        }
    }
  
    updateTable();
    updateProductList();
}
