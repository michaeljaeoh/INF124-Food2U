<div id="receipt">

  <div>
    <img style="float:right; width: 30px" src="./assets/img/cart.png">
    <p class="center">
      <strong>Shopping Cart</strong>
    </p>
  </div>

  <?php
    $homepage = "/inf124-ecommerce/index.php";
    $currentpage = $_SERVER['REQUEST_URI'];

    if($homepage==$currentpage) {
      echo "<span class='center'>Welcome! You have not placed an order yet, but that's ok click on your favorite restaurant to begin.</span><br />";
    }
  ?>

  <table id="receiptTable"></table>

  <form action="sendReceipt.php" method="post">
    <table id="userDataForm"></table>
  </form>


  <br>

  <?php
    echo "<span class='center'>BTW, you will be placing the order on: ".date("l, F jS")." @ ".date("g:ia").".</span>";
  ?>

</div>


<script language="javascript" type="text/javascript" src="assets/javascript/receipt.js"></script>
