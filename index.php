<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script type="text/javascript" src="assets/javascript/rotate.js"></script>
</head>

<body onload="startRotation()">

  <div id="page">

    <?php include( "common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <h2 class="center">Welcome to Food2U</h3>
          <div id="image" align="center">
            <img id="placeholder" src="" alt="Food Delivered" width="250" height="150"/></div>

        <h3 class="center">Where UCI students deliver food to other students.</h3>
        <p>Just click your favorite restaurant, from the list below and then click order. A UCI student will then contact you and deliver the Food2U.</p><br />

        <div class="grid-container outline">

          <div class="row">
            <a href="in-n-out.php">
              <span class="col-1">
                <img id="logo" height="75" src="assets/img/in-n-out.png">
              </span>
            </a>
            <a href="starbucks.php">
              <span class="col-1">
                <img id="logo" height="75" src="assets/img/starbucks.png">
              </span>
            </a>
          </div>

          <div class="row">
            <a href="#">
              <span class="col-1 coming-soon">
                <img id="logo" height="75" src="assets/img/chipotle.png">

              </span>
            </a>


            <a href="#">
              <span class="col-1 coming-soon">
                <img id="logo" height="75" src="assets/img/chick-fil-a.png">
              </span>
            </a>
          </div>



        </div>


      </div>

      <?php include( "common/sidebar.php");?>

    </div>

  </div>
</body>

</html>
