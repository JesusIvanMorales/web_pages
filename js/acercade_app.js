let go_back_button = document.getElementById("go_back");
let navbar = document.getElementById("navbar_container");
let theme_icon = document.getElementById("theme_icon");
let theme_button = document.getElementById("theme");
let body = document.getElementById("body");
const txtdark = document.querySelectorAll("h4.text-dark");
const fontAwesomeIcons = document.querySelectorAll("i.fa-solid");
let texto_lc = document.getElementsByClassName("texto_lc");
const envioCorreo = document.getElementById("envioCorreo");

let color = false; //1 = black; 2 = white

const botonClick1 = localStorage.getItem("botonClick1");
let botonClick2 = true;

ponerfecha();

theme_button.addEventListener("click", (e) => {
  e.preventDefault();

  if (color) {
    other("body2","body1","btn-dark","btn-light","fa-sun","fa-moon","text-light","linktxt","text-light","text-dark","icon-color","icon-color2");

    color = false;
    botonClick2 = false;
    localStorage.setItem("botonClick2", JSON.stringify(botonClick2));
  } else {
    other(
      "body1",
      "body2",
      "btn-light",
      "btn-dark",
      "fa-moon",
      "fa-sun",
      "linktxt",
      "text-light",
      "text-dark",
      "text-light",
      "icon-color2",
      "icon-color"
    );

    color = true;
    botonClick2 = true;
    localStorage.setItem("botonClick2", JSON.stringify(botonClick2));
  }
});

if (botonClick1 === "true") {
  other(
    "body1",
    "body2",
    "btn-light",
    "btn-dark",
    "fa-moon",
    "fa-sun",
    "linktxt",
    "text-light",
    "text-dark",
    "text-light",
    "icon-color2",
    "icon-color"
  );

  color = true;
  botonClick2 = true;
  localStorage.setItem("botonClick2", JSON.stringify(botonClick2));
} else {
  other("body2","body1","btn-dark","btn-light","fa-sun","fa-moon","text-light","linktxt","text-light","text-dark","icon-color","icon-color2");

    color = false;
    botonClick2 = false;
    localStorage.setItem("botonClick2", JSON.stringify(botonClick2));
}

function other(txt1,txt1_1,txt2,txt2_1,txt3,txt3_1,txt4,txt4_1,txt5,txt5_1,txt6,txt6_1) {
  body.classList.remove(txt1);
  body.classList.add(txt1_1);

  theme_button.classList.remove(txt2);
  theme_button.classList.add(txt2_1);

  theme_icon.classList.remove(txt3);
  theme_icon.classList.add(txt3_1);

  go_back_button.classList.remove(txt2);
  go_back_button.classList.add(txt2_1);
  txtdark.forEach((text) => {
    text.classList.remove(txt5);
    text.classList.add(txt5_1);
  });
  fontAwesomeIcons.forEach((icon) => {
    if (icon.classList[1] !== "fa-angle-left") {
      icon.classList.remove(txt6);
      icon.classList.add(txt6_1);
    }
  });
  for (let index = 0; index < texto_lc.length; index++) {
    texto_lc[index].classList.remove(txt4);
    texto_lc[index].classList.add(txt4_1);
  }
}

envioCorreo.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(envioCorreo);

  fetch("../../PHPMailer/enviar_correo.php", {
    method: "POST",
    body: formData
  })
    .then((response) => response.json())
    .then((data) => {

      alert(data[0].nombre);
      
      if(data[0].clave === "ok")
        envioCorreo.reset();
    })
    .catch((error) => {
      alert("Error: " + error);
    });
});

function ponerfecha(){
  let today = new Date();

  let yyyy = today.getFullYear();
  let mm = today.getMonth() + 1;
  let dd = today.getDate();
  
  if (mm < 10) 
    mm = '0' + mm;
  
  if (dd < 10) 
    dd = '0' + dd;

  let formattedDate = yyyy + "-" + mm + "-" + dd;

  fecha.value = formattedDate;
}