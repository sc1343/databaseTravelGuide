function validateName() {
    isName = true;
    if (document.getElementById("name").value == "") {
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name").style.backgroundColor = 'pink';
        isName = false;
    } 
    else {
        document.getElementById("name").style = null;
        isName = true;
    }
    return isFirstValid;
}

function validateComment() {
    isComment = true;
    if (document.getElementById("place").value == "") {
        document.getElementById("place").style.borderColor = "red";
        document.getElementById("place").style.backgroundColor = 'pink';
        isComment = false;
    } 
    else {
        document.getElementById("place").style = null;
        isComment = true;
    }
    return isComment;
}

function validateInt() {
    isint = true;
    if (document.getElementById("rating").value == "") {
        document.getElementById("rating").style.borderColor = "red";
        document.getElementById("rating").style.backgroundColor = 'pink';
        isint = false; 
    }
    else {
        document.getElementById("rating").style = null;
        isint = true;
    }
    return isint;
}

function validateDate() {
    isDate = true;
    if (document.getElementById("date").value == "") {
        document.getElementById("date").style.borderColor = "red";
        document.getElementById("date").style.backgroundColor = 'pink';
        isDate = false;
    }
    else {
        document.getElementById("date").style = null;
        isDate = true;
    }
    return isDate;
}

function validateForm() {
			"use strict"
			validateName()
      		validateComment();
      		validateInt();
      		validateDate();
			return (validateName() && validateComment()&& validateInt() &&isDate());
		}
		
		



var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}





function changebackground(){
  document.body.style.backgroundImage = "url('http://serenity.ist.rit.edu/~sc1343/240/project2/assets/images/index1.jpg')";

}

function simple(){
  document.body.style.backgroundImage = "url('../assets/images/blue.jpg')";





}




