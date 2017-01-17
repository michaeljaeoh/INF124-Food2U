
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U | Starbucks</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script language="javascript" type="text/javascript" src="assets/javascript/starbucks.js"></script>
</head>

<script>console.log(window.name)</script>

<body>

  <div id="page">

    <?php include("common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <h3>Pick Your Starbucks Drink for Delivery</h3>
        <p>
          To order, please choose the quantity of your favorite drink
        </p>
        <form id="starbucksForm" action="" onsubmit="drawReceipt()">
          <table id="starbucksTable" summary="starbucks order form">
            <th>Drink</th>
            <th>Price</th>
            <th>Order Quantity</th>
            <tr valign='top'>
              <td><label class="drinkName" for="1">Iced Mocha Latte</label></td>
              <td class="price">3.95</td>
              <td>
                <select>
                  <option>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label class="drinkName" for="2">Caramel Frappuchino</label></td>
              <td class="price">4.95</td>
              <td>
                <select>
                  <option>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label class="drinkName" for="3">Soy Latte</label></td>
              <td class="price">2.95</td>
              <td>
                <select>
                  <option>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label class="drinkName" for="4">Iced Mocha Latte</label></td>
              <td class="price">3.95</td>
              <td>
                <select>
                  <option>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>


            <tr>
              <td>
                <input type="button" onClick="validateStarbucksForm()" value="Order" />
              </td>

            </tr>

          </table>
        </form>


      </div>

      <?php include("common/sidebar.php");?>
    </div>

  </div>
</body>

</html>
