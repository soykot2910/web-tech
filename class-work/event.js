const onclickFun = () => {
  document.getElementById("click").style.background = "red";
};

const onmouseoverFun = () => {
  alert("hello");
};

const onblueFun = () => {
  var x = document.getElementById("name");
  x.value = x.value.toUpperCase();
};

function onfocusFun(x) {
  x.style.background = "yellow";
}

function onkeypressFun() {
  alert("you press a key");
}

function onresetFun() {
  alert("The form was reset");
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
