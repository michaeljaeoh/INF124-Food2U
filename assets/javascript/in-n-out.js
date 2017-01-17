function validateINOform() {

  //find the inoMenu
  var inoMenu = document.getElementById("INOmenu");

  //get ALL of the 'select' elements from the inoMenu
  var input = inoMenu.getElementsByTagName('select');

  var total = 0;
  var orders = [];

  //iterate through all form fields
  for (var i = 0; i < input.length; i++) {
    //get the innerText of element at i
    var item = document.getElementsByClassName("itemName")[i].innerText;
    var price = parseFloat(document.getElementsByClassName("price")[i].innerText, 10);
    //get the value of the select at i
    var quantity = parseFloat(input[i].value);

    if (quantity != 0) {

      var order = {
        item: item,
        price: price,
        quantity: quantity
      }
      orders.push(order);
    };
  };

  //in receipt.js
  addToAllOrders(orders);


};
