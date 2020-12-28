var clicks = 0;
function increment() {
  clicks += 1;
  document.getElementById("count").innerHTML = clicks;
}
function decrement() {
  clicks -= 1;
  document.getElementById("count").innerHTML = clicks;
}

function sayHello() {
  alert("hello");
}
const onblueFun = () => {
  var x = document.getElementById("name");
  x.value = x.value.toUpperCase();
};

const onchangeFun = () => {
  var x = document.getElementById("mySelect").value;
  document.getElementById("onchange").innerHTML = "You selected: " + x;
};

function myFunction(x) {
  x.style.background = "yellow";
}

function onkeypressFun() {
  alert("you press a key");
}

var xl = 0;
function onscrollFun() {
  document.getElementById("scroll").innerHTML = xl += 1;
}
function onsearchFun() {
  var x = document.getElementById("myInput");
  document.getElementById("search").innerHTML =
    "You are searching for: " + x.value;
}

function onresetFun() {
  alert("The form was reset");
}

function ondblclickFun() {
  document.getElementById("dblclick ").innerHTML = "Hello World";
}

function onsubmitFun () {
  alert("The form was submitted");
}
function oncopyFun () {
  document.getElementById("copy ").innerHTML = "You copied text!"
}
function oncutFun () {
  document.getElementById("demo").innerHTML = "You cut text!";
}
function onloadFun () {
  alert("Page is loaded");
}
