
function ficha(ref){
location.replace("index.php?buq=" + ref);
}

function cerrar2() {
  document.getElementById("menuS1").style.display = "none";
  document.getElementById("menuS2").style.display = "none";
  document.getElementById("menuS3").style.display = "none";
  document.getElementById("menuS4").style.display = "none";
  document.getElementById("menuS5").style.display = "none";
  document.getElementById("menuS6").style.display = "none";
  document.getElementById("menuS7").style.display = "none";
  document.getElementById("menuS8").style.display = "none";
  document.getElementById("menuS9").style.display = "none";
  document.getElementById("menuS10").style.display = "none";
  document.getElementById("menuS110").style.display = "none";
}
function cerrar() {
  document.getElementById("menuS1").style.display = "none";
  document.getElementById("menuS2").style.display = "none";
  document.getElementById("menuS3").style.display = "none";
  document.getElementById("menuS4").style.display = "none";
  document.getElementById("menuS5").style.display = "none";
  document.getElementById("menuS6").style.display = "none";
  document.getElementById("menuS7").style.display = "none";
  document.getElementById("menuS8").style.display = "none";
  document.getElementById("menuS9").style.display = "none";
  document.getElementById("menuS10").style.display = "none";
  document.getElementById("menuS110").style.display = "none";

  document.getElementById("menuS11").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS11").style.color="#25446b";

  document.getElementById("menuS22").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS22").style.color="#25446b";

  document.getElementById("menuS33").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS33").style.color="#25446b";

  document.getElementById("menuS44").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS44").style.color="#25446b";

  document.getElementById("menuS55").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS55").style.color="#25446b";

  document.getElementById("menuS66").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS66").style.color="#25446b";

  document.getElementById("menuS77").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS77").style.color="#25446b";

  document.getElementById("menuS88").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS88").style.color="#25446b";

  document.getElementById("menuS99").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS99").style.color="#25446b";

  document.getElementById("menuS100").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS100").style.color="#25446b";

  document.getElementById("menuS1110").style.backgroundColor="#F4F4F4";
  document.getElementById("menuS1110").style.color="#25446b";
}
function menuS1() {
  cerrar();
  document.getElementById("menuS1").style.display = "block";
  document.getElementById("menuS11").style.backgroundColor="#abebfa";
  document.getElementById("menuS11").style.color="#25446b";
}
function menuS2() {
  cerrar();
  document.getElementById("menuS2").style.display = "block";
  document.getElementById("menuS22").style.backgroundColor="#abebfa";
  document.getElementById("menuS22").style.color="#25446b";
}
function menuS3() {
  cerrar();
  document.getElementById("menuS3").style.display = "block";
  document.getElementById("menuS33").style.backgroundColor="#abebfa";
  document.getElementById("menuS33").style.color="#25446b";
}
function menuS4() {
  cerrar();
  document.getElementById("menuS4").style.display = "block";
  document.getElementById("menuS44").style.backgroundColor="#abebfa";
  document.getElementById("menuS44").style.color="#25446b";
}
function menuS5() {
  cerrar();
  document.getElementById("menuS5").style.display = "block";
  document.getElementById("menuS55").style.backgroundColor="#abebfa";
  document.getElementById("menuS55").style.color="#25446b";
}
function menuS6() {
  cerrar();
  document.getElementById("menuS6").style.display = "block";
  document.getElementById("menuS66").style.backgroundColor="#abebfa";
  document.getElementById("menuS66").style.color="#25446b";
}
function menuS7() {
  cerrar();
  document.getElementById("menuS7").style.display = "block";
  document.getElementById("menuS77").style.backgroundColor="#abebfa";
  document.getElementById("menuS77").style.color="#25446b";
}
function menuS8() {
  cerrar();
  document.getElementById("menuS8").style.display = "block";
  document.getElementById("menuS88").style.backgroundColor="#abebfa";
  document.getElementById("menuS88").style.color="#25446b";
}
function menuS9() {
  cerrar();
  document.getElementById("menuS9").style.display = "block";
  document.getElementById("menuS99").style.backgroundColor="#abebfa";
  document.getElementById("menuS99").style.color="#25446b";
}
function menuS10() {
  cerrar();
  document.getElementById("menuS10").style.display = "block";
  document.getElementById("menuS100").style.backgroundColor="#abebfa";
  document.getElementById("menuS100").style.color="#25446b";
}
function menuS11() {
  cerrar();
  document.getElementById("menuS110").style.display = "block";
  document.getElementById("menuS1110").style.backgroundColor="#abebfa";
  document.getElementById("menuS1110").style.color="#25446b";
}

function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie() {
  var cookies =document.cookie;
  var arrayDeCookies = cookies.split(";");
      for (var i = 0; i < arrayDeCookies.length; i++) {
       var arrayDeCesta=arrayDeCookies[i].split("=");

      for (var i = 0; i < arrayDeCesta.length; i++) {
        if (arrayDeCesta[i] == "cesta") {
            var arrayarticulos=arrayDeCesta[i+1].split("~~");
            for (var i = 0; i < arrayarticulos.length-1; i++) {
            console.log(decodeURIComponent(arrayarticulos[i])+ "       "+i);
            }
        }
    }
}
}

function checkCookie(cod,nombre,foto,precio,unid) {
  if (document.cookie == "") {
    var cookies2=cod+"&"+nombre+"&"+foto+"&"+precio+"&"+unid+"~~";
    setCookie("cesta", cookies2, 2);
    getCookie();
  }else {
    var cookies =document.cookie;
    var arrayDeCookies = cookies.split(";");
    for (var i = 0; i < arrayDeCookies.length; i++) {
      var arrayDeCesta = arrayDeCookies[i].split("=");
      for (var i = 0; i < arrayDeCesta.length; i++) {
        if (arrayDeCesta[i]=="cesta") {
          var cookies2=arrayDeCesta[i+1]+encodeURIComponent(cod+"&"+nombre+"&"+foto+"&"+precio+"&"+unid+"~~");
          setCookie("cesta",cookies2 ,2);
        }
      }

    }
    getCookie();
  }
}
