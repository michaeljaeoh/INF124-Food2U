//rotate.js


var pathName = "assets/img/";
var imageArray = new Array(5);
for (i=0; i<imageArray.length; i++){
  imageArray[i] = pathName +(i+1) +".jpg";
}


var count = 0;
function rotate(){
  var imgObject = document.getElementById('placeholder');
  imgObject.src = imageArray[count];
  ++count;
  if (count==5){
    count = 0;
  }
}

function startRotation()
{
  document.getElementById('placeholder').src=imageArray[4];
  setInterval('rotate()',2800);
}
