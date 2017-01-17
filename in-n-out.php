<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U | In-N-Out</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script language="javascript" type="text/javascript" src="assets/javascript/in-n-out.js"></script>
</head>

<script>console.log(window.name)</script>

<body>

  <div id="page">

    <?php include( "common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <h3>Build Your In-N-Out Order for Delivery</h3>
        <p>
          To order, please choose the quatities of each menu
          item that you would like delivered.
        </p>
        <form id="INOform" action="" onsubmit="drawReceipt()">
          <table id=INOmenu summary="in-n-out order form">
            <th align="justify">Burgers & Fries</th>
            <th colspan="2">Price</th>
            <th>
              Quantity
            </th>
            <tr valign="top">
              <td>
                <label class="itemName" for="1">Double-Double</label>
              </td>
              <td class="price" align="center" colspan="2">3.45</td>
              <td align="center">
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td>
                <label class="itemName" for="2">Cheeseburger</label>
              </td>
              <td class="price" align="center" colspan="2">2.35</td>
              <td align="center">
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td>
                <label class="itemName" for="3">Hamburger</label>
              </td>
              <td class="price" align="center" colspan="2">2.05</td>
              <td align="center">
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td>
                <label class="itemName" for="4">French Fries</label>
              </td>
              <td class="price" align="center" colspan="2">1.60</td>
              <td align="center">
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td>
                </br>
              </td>
            </tr>
            <th align="justify">
              Drinks
            </th>
            <tr valign="top">
                <td>
                <label class="itemName" for="5">Small Drink</label>
              </td>
              <td class="price" align="center" colspan="2">1.45</td>
              <td align="center">
                <!--<select name="drink">
                  <option value="0">--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>!-->
              </br>
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label class="itemName" for="6">Medium Drink</label>
              </td>
              <td class="price" align="center" colspan="2">1.55</td>
              <td align="center">
                <!--<select name="drink">
                  <option value="0">--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>!-->
              </br>
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td>
                <label class="itemName" for="7">Large Drink</label>
              </td>
              <td class="price" align="center" colspan="2">1.75</td>
              <td align="center">

                <!--<select name="drink">
                  <option value="0">--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>
                !-->
              </br>
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td>
                <label class="itemName" for="8">X-Large Drink</label>
              </td>
              <td class="price" align="center" colspan="2">1.95</td>
              <td align="center">
                <!--<select name="drink">
                  <option value="0">--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>!-->
              </br>
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td>
                <label class="itemName" for="9">Shakes</label>
              </td>
              <td class="price" align="center" colspan="2">2.10</td>
              <td align="center">

                <!--<select name="shake">
                  <option value="0">--choose shake--</option>
                  <option value="chocolate">Chocolate</option>
                  <option value="strawberry">Strawberry</option>
                  <option value="vanilla">Vanilla</option>
                  <option value="neapolitan">Neapolitan</option>
                </select>!-->
              </br>
                <select>
                  <option value="0">--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </td>
            </tr>
            <tr>
              <td>
                <input type="button" onClick="validateINOform()" value="Order" />
              </td>

            </tr>

          </table>
        </form>
      </div>

      <?php include( "common/sidebar.php");?>
    </div>

  </div>
</body>

</html>
