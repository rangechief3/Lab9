function verify(){

var email = document.getElementById('username').value;
var pass = document.getElementById('password').value;
var item1 = document.getElementById('item1').value;
var item2 = document.getElementById('item2').value;
var item3 = document.getElementById('item3').value;

if(email.length == 0){
alert("Must enter username!");
return false;
}
if(pass.length == 0){
alert("Must enter password!");
return false;
}
if(item1.length == 0 || item1 < 0){
alert("Must enter valid quantity for Pixar lamps!");
return false;
}
if(item2.length == 0 || item2 < 0){
alert("Must enter valid quantity for Duck lamps!");
return false;
}
if(item3.length == 0 || item3 < 0){
alert("Must enter valid quantity for Cool lamps!");
return false;
}

return true;
}