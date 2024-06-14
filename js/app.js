let border_color = document.getElementsByClassName("border_change");
let change_idiom_button = document.getElementById("change_idiom");
let texto_text = document.getElementsByClassName("texto_text");
let more_info_button = document.getElementById("more_info");
let change_idiom = document.getElementById("change_idiom");
let navbar = document.getElementById("navbar_container");
let theme_icon = document.getElementById("theme_icon");
let container1 = document.getElementById("text_color");
let theme_button = document.getElementById("theme");
let footer = document.getElementById("footer");
let body = document.getElementById("body");

let color = false; //1 = black; 2 = white

if (document.cookie == "lenguaje=english")
    location.href = "pages/en/index_en.php";

const botonClick2 = localStorage.getItem("botonClick2");
let botonClick1 = true;

theme_button.addEventListener("click", (e) => {
    e.preventDefault();

    if (color) {
        other("body2", "body1", "bg-navbar2", "bg-primary", "btn-primary", "btn-light", "fa-sun", "fa-moon", "text-light", "text-dark", "border-light", "border-black", "bg-dark_1", "bg-light", "hello-word", "btn-primary", "btn-light"); 

        color = false;
        botonClick1 = false;
        localStorage.setItem('botonClick1',JSON.stringify(botonClick1));
    } else {
        other("body1", "body2", "bg-primary", "bg-navbar2", "btn-light", "btn-primary", "fa-moon", "fa-sun", "text-dark", "text-light", "border-black", "border-light", "bg-light", "bg-dark_1", "hello-word", "btn-light", "btn-primary");
        
        color = true;
        botonClick1 = true;
        localStorage.setItem('botonClick1',JSON.stringify(botonClick1));
    }
    
});

change_idiom.addEventListener("click", e => {
    e.preventDefault();

    document.cookie = "lenguaje=english; expires=Thu, 07 Jan 2025 00:00:00 UTC; path=/";

    location.href = "pages/en/index_en.php";
});

if(botonClick2==="true"){
    other("body1", "body2", "bg-primary", "bg-navbar2", "btn-light", "btn-primary", "fa-moon", "fa-sun", "text-dark", "text-light", "border-black", "border-light", "bg-light", "bg-dark_1", "hello-word", "btn-light", "btn-primary");

    color = true;
    botonClick1 = true;
    localStorage.setItem('botonClick1',JSON.stringify(botonClick1));
} else {
    other("body2", "body1", "bg-navbar2", "bg-primary", "btn-primary", "btn-light", "fa-sun", "fa-moon", "text-light", "text-dark", "border-light", "border-black", "bg-dark_1", "bg-light", "hello-word", "btn-primary", "btn-light");

    color = false;
    botonClick1 = false;
    localStorage.setItem('botonClick1',JSON.stringify(botonClick1));
}

function other(txt1, txt1_1, txt2, txt2_1, txt3, txt3_1, txt4, txt4_1, txt5, txt5_1, txt6, txt6_1, txt7, txt7_1, txt7_2, txt8, txt8_1) {
    body.classList.remove(txt1);
    body.classList.add(txt1_1);

    navbar.classList.remove(txt2);
    navbar.classList.add(txt2_1);

    footer.classList.remove(txt2);
    footer.classList.add(txt2_1);

    theme_button.classList.remove(txt3);
    theme_button.classList.add(txt3_1);

    theme_icon.classList.remove(txt4);
    theme_icon.classList.add(txt4_1);

    more_info_button.classList.remove(txt3);
    more_info_button.classList.add(txt3_1);

    change_idiom_button.classList.remove(txt8);
    change_idiom_button.classList.add(txt8_1);

    if (color) {
        container1.classList.remove(txt7);
        container1.classList.add(txt7_1);
        container1.classList.add(txt7_2);
    } else {
        container1.classList.remove(txt7);
        container1.classList.remove(txt7_2);
        container1.classList.add(txt7_1);
    }

    for (let index = 0; index < texto_text.length; index++) {
        texto_text[index].classList.remove(txt5);
        texto_text[index].classList.add(txt5_1);
    }

    for (let i = 0; i < border_color.length; i++) {
        border_color[i].classList.remove(txt6);
        border_color[i].classList.add(txt6_1);   
    }
}