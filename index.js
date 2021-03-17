var emailIcon = document.querySelector("#email-btn");
var envOpen = 'Submit <i class="fa fa-envelope-open" aria-hidden="true">'
var envClosed = 'Submit <i class="fa fa-envelope" aria-hidden="true">'

// Displays open envelope icon when mouse is hovering button
emailIcon.addEventListener('mouseover', function(event){
  emailIcon.innerHTML= envOpen;
});
// Displays closed envelope icon when mouse is anywhere else
emailIcon.addEventListener('mouseout', function(event){
  emailIcon.innerHTML= envClosed;
});
var tabs = ["#about","#skills","#projects","#contact-me"];
window.onscroll = function(){myFunction()};
var navbar = document.querySelector('.nav-bar');
var sticky = navbar.offsetTop;

function myFunction(){
  if (window.pageYOffset >= sticky){
    navbar.classList.add("sticky");
  }else {
    navbar.classList.remove("sticky");
  }
}
