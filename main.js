function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('flavSuggest').value == "") {
alert("Fill All Fields!");
} else {
document.getElementById('flavourSuggest').submit();
alert("Thank you for your suggestion!");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('flavourForm').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('flavourForm').style.display = "none";
}