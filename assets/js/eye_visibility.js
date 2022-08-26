// console.log("Hello world!");

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
  // toggle the type attribute
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("fa-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener("submit", function (e) {
  e.preventDefault();
});

// const updateProfile = document.querySelector("#updateProfile");
// const disabledbtn = document.querySelector('.disabledbutton');

// updateProfile.addEventListener("click", function(){

//   $("#infoProfil").removeClass("disabledbutton");
// });
$("#infoProfil").ready(function() {
  var $infoProfil = $("#infoProfil").find(":input");
  $infoProfil.prop("disabled",true);

  // not sure what you want to click on to re-enable
  $("#updateProfile").one("click",function() {
     $infoProfil.prop("disabled",false);
  })
});