function toggleSubMenu(button) {
    button.nextElementSibling.classList.toggle('show')
}
function myFunction() {
  document.getElementById("window").classList.toggle("visible");
}
function myFunction1() {
  document.getElementById("window1").classList.toggle("visible");
}
function myFunction2() {
  document.getElementById("window2").classList.toggle("visible");
}
function btnclose(){
  document.getElementById("window").classList.remove("visible")
}
function btnclose1(){
  document.getElementById("window1").classList.remove("visible")
}
function btnclose2() {
  document.getElementById("window2").classList.remove("visible")
}