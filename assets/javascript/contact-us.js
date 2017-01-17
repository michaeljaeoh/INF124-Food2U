function sendEmail()
{
  var contactFormObj = document.getElementById("contactForm");

  return validateInput(contactFormObj);
  // if (validateInput(contactFormObj))
  // {
  //   createMessage(contactFormObj);
  // }
}

function createMessage(contactFormObj)
{
  var fName = contactFormObj.firstName.value;
  var lName = contactFormObj.lastName.value;
  var senderName = fName + " " + lName;

  var phoneNum = contactFormObj.phoneNumber.value;
  var formattedPhoneNum = "("+phoneNum.substr(0,3)+")"+phoneNum.substr(3,6)+"-"+phoneNum.substr(6);

  var email = contactFormObj.emailAddress.value;
  var subject = contactFormObj.subject.value;
  var comment = contactFormObj.message.value;

  var theMessage =
  "***Sent Message***\n\n" +
  "From: "+senderName + "\n" +
  "Sender Contact Info: "+formattedPhoneNum + " ["+email+"]\n"+
  "Subject: "+subject+"\n"+
  "Message Content: "+comment+"\n";

  alert(theMessage);
}


function validateInput(contactFormObj)
{
  var fName = contactFormObj.firstName.value;


  var lName = contactFormObj.lastName.value;
  var phoneNum = contactFormObj.phoneNumber.value;
  var email = contactFormObj.emailAddress.value;
  var subject = contactFormObj.subject.value;
  var comment = contactFormObj.message.value;


  if (!validatefName(fName)){
    alert("Error: Invalid first name.");
    return false;
  }
  if (!validatelName(lName)){
    alert("Error: Invalid last name.");
    return false;
  }

  if (!validatePhoneNumber(phoneNum)){
    alert("Error: Invalid phone number.");
    return false;
  }
  if (!validateEmail(email)){
    alert("Error: Invalid e-mail address.");
    return false;
  }
  if (!validateSubject(subject)){
    alert("Error: Message must have a subject title.");
    return false;
  }
  if (!validateMessage(comment)){
    alert("Error: Comments box is empty.");
    return false;
  }

  return true;
}

function validatefName(name)
{
  var l = name.length;

  if (l==0)
  {
    return false;
  }
  else
  {
    return true;
  }
}
function validatelName(name)
{
  var l = name.length;
  if (l==0)
  {
    return false;
  }
  else
  {
    return true;
  }
}

function validatePhoneNumber(phoneNumber)
{
  var l = phoneNumber.length;
  if (l!=10)
  {
    return false;
  }
  else
  {
    return true;
  }
}

function validateEmail(email)
{
  var pass = email.search(/.+@.+/);
  if (pass == 0)
  {
    return true;
  }
  else
  {
    return false;
  }
}


function validateSubject(subject)
{
  var l = subject.length;
  if (l==0)
  {
    return false;
  }
  else
  {
    return true;
  }
}

function validateMessage(comment)
{
  var l = comment.length;
  if (l==0)
  {
    return false;
  }
  else
  {
    return true;
  }
}
