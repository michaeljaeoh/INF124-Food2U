//global variable allOrders to keep track of allOrders
allOrders = [];
var totalPrice = 0;
var numOfOrders = 0;


//this function really does nothing right now since we need PHP to store the variables in our current session
function addToAllOrders(orders) {
  //as orders (from other pages come in), append them to the master order

  allOrders.push(orders);

  numOfOrders = allOrders[0].length;

  //helpful to console.log(allOrders) to understand what's going on
  //console.log(allOrders);

  drawReceipt();
}

function drawReceipt() {

  //will be used for the SUBTOTAL


  //find the receiptTable
  var receiptTable = document.getElementById("receiptTable");
  var formTable = document.getElementById("userDataForm");

  //insert Table Headers
  var row = receiptTable.insertRow(0);
  var cell0 = row.insertCell(0);
  cell0.style.width = "3em";
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);

  cell0.innerHTML = "<strong>Qty</strong>"
  cell1.innerHTML = "<strong>Item(s) Ordered</strong>";
  cell2.innerHTML = "<strong>Price(x qty)</strong>";

  //go through all of the (array) of orders
  for (var i = 0; i < allOrders[0].length; i++) {
    var quantity = allOrders[0][i].quantity;
    var item = allOrders[0][i].item;
    var price = allOrders[0][i].price * allOrders[0][i].quantity;
    totalPrice += price;

    //make a new row at the 2nd position (after the table headers (<th>))
    var row = receiptTable.insertRow(1);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    cell0.innerText = quantity;
    cell1.innerText = item;
    cell2.innerText = "$" + price.toFixed(2);

    var row = formTable.insertRow(0);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    cell0.innerHTML = "<input type='hidden' name='quantity"+ i +"' value='"+ quantity+"'>";
    cell1.innerHTML = "<input type='hidden' name='item"+ i +"' value='"+ item+"'>";

  };

  //insert subtotal row at last position for SUBTOTAL
  var row = receiptTable.insertRow();
  row.style.height = "3em";
  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  cell0.innerText = "";
  cell1.innerHTML = "<strong>SUBTOTAL: </strong>";
  cell2.innerHTML = "$" + totalPrice.toFixed(2);


  renderUserForm(formTable);

  renderSubmitButton(formTable);


}



function renderUserForm(formTable) {




    //first and last name
    var row = formTable.insertRow();
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    cell0.innerHTML = '<input type="text" name="firstname" size="15" placeholder="First Name">'
    cell1.innerHTML = '<input type="text" name="lastname" size="15" placeholder="Last Name">';


    //Address and (city)
    var row = formTable.insertRow();
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    cell0.innerHTML = '<input type="text" name="address" size="20" placeholder="Address">'
    cell1.innerText = ', Irvine, CA';

    //phone & hidden fields
    var row = formTable.insertRow();
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell();
    var cell3 = row.insertCell();
    cell0.innerHTML = '<input type="text" name="phone" size="15" placeholder="Phone Number">'
    cell1.innerHTML = '<input type="text" name="email" size="15" placeholder="Email">'
    cell2.innerHTML = "<input type='hidden' name='totalprice' value='"+ totalPrice.toFixed(2)+"'>";
    cell3.innerHTML = "<input type='hidden' name='numOfOrders' value='"+ numOfOrders+"'>";


}

function renderSubmitButton(formTable) {
  //submit button
  var row = formTable.insertRow();
  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  cell0.innerText = ''
  cell1.innerHTML = '<input type="submit" value="Place Order">'
}
