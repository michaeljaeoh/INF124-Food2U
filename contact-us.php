
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Contact Us</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta http-equiv="refresh" content="60" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script type="text/javascript" src="assets/javascript/contact-us.js">
  </script>
</head>

<body>

  <div id="page">
    <?php include("common/mainmenu.html");?>

    <div class="main">
      <h1>Contact Us</h1>
      <p>We'd love to hear some feedback from our users!</p>
      <br/>
      <form id="contactForm" action="processFeedback.php" onsubmit="return sendEmail()" method="post">
          <table summary="Contact Us">
            <tr>
              <td>First Name:</td>
              <td><input id="firstName" type="text" name="firstName" size="25" /></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><input id="lastName" type="text" name="lastName" size="25" /></td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input id="phoneNumber" type="text" name="phoneNumber" size="25" /></td>
            </tr>
            <tr>
              <td>E-mail Address:</td>
              <td><input id="emailAddress" type="text" name="emailAddress" size="25" /></td>
            </tr>

            <tr>
              <td>Message Subject:</td>
              <td><input id="subject" type="text" name="subject" size="30  " /></td>
            </tr>
            <tr>
              <td>Comments:</td>
              <td><textarea id="message" name="message" rows="7" cols="40">
              </textarea></td>
            </tr>

            <tr>
              <td colspan="2"><p><label for="reply">Do you want a response to your message?</label>
                <input id="reply" type="checkbox" name="reply" value="yes"/></p>
              </td>
            </tr>

            <tr>
              <td><input type="reset" value="Clear Form" /></td>
              <td align="right"><input type="submit" value="Send Message" /></td>
            </tr>
          </table>
      </form>

    </div>
  </div>
</body>
</html>
