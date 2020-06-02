myButton = document.getElementById("scrollButton");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myButton.style.display = "block";
  } else {
    myButton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


var images = document.querySelectorAll(".image-small");
var i;
for (i = 0; i < images.length; i++) {

  var modal = document.getElementsByClassName("image-modal")[i];
  var img = document.getElementsByClassName("image-small")[i];
  var modalImg = document.getElementsByClassName("image-large")[i];
  var captionText = document.getElementsByClassName("modal-caption")[i];
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  var span = document.getElementsByClassName("close")[i];
  span.onclick = function() {
    modal.style.display = "none";
  }
}
