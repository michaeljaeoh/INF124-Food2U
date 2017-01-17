function validateStarbucksForm() {

  //find the starbucksTable
  var starbucksTable = document.getElementById("starbucksTable");

  //get ALL of the 'select' elements from the starbucksTable
  var input = starbucksTable.getElementsByTagName('select');

  var total = 0;
  var orders = [];

  //iterate through all form fields
  for (var i = 0; i < input.length; i++) {
    //get the innerText of element at i
    var drink = document.getElementsByClassName("drinkName")[i].innerText;
    var price = parseFloat(document.getElementsByClassName("price")[i].innerText, 10);
    //get the value of the select at i
    var quantity = parseFloat(input[i].value);

    if (quantity != 0) {

      var order = {
        item: drink,
        price: price,
        quantity: quantity
      }
      orders.push(order);
    };
  };

  //in receipt.js
  addToAllOrders(orders);


};
