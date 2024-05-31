const headerCall = document.querySelector(".header");

const DisplayHeader = () => {

    function DisplayHeaderContent() {
        return `
            <nav>
                <ul>
                    <li class="header__logoContenedor"><img src="../imagenes/logo.png" alt="logo" class="header__logoContenedor__logo"></li>
                    <li class="header__inicio"><a href="./index.php">Inicio</a></li>
                    <li class="header__acercaDeNosotros"><a href="./acercaDeNosotros.php">Acerca de Nosotros</a></li>
                    <li class="header__contacto">Contacto</li>
                    ${ nombreDeUsuario == "" ? 
                        `<li class="header__logIn"><a href="../php/logIn" class="header__logIn__button">Log In</a></li>` 
                    : 
                        `<li class="header__logIn"><button class="header__logOut__button">Log Out</button></li>`
                    }
                    <button class="header__navBar" title="navBarMenu">
                        <div class="header__navBar__line"></div>
                        <div class="header__navBar__line"></div>
                    </button>
                    ${ nombreDeUsuario != "" ?
                        `<li class="header__perfil"><img src="../imagenes/iconos/usuario.svg"/ class="header__iconoUsuario /><div class="header__logIn__button"> ${nombreDeUsuario}</div></li>
                        <li class="header__carroDeCompra"><img src="../imagenes/iconos/shopping-cart.svg" class="header__carroDeCompra__button" /></li>` 
                    : 
                        ""
                    }
                </ul>
            </nav>
        `
    }
    headerCall.innerHTML = DisplayHeaderContent();
}

/*DisplayHeader()*/

let numberMenu = 1;

const hidenMenu = $q(".navBarMenu"),
    NavLine1 = $q(".header__navBar__line:nth-of-type(1)"),
    NavLine2 = $q(".header__navBar__line:nth-of-type(2)");

//crea una x in el navbar si numberMenu es igual a 1 y lo desarma si no lo es
$q(".header__navBar").addEventListener("click", () => {

    NavLine1.style.animation = "navBarClickedLine1 0.5s Forwards";
    NavLine2.style.animation = "navBarClickedLine2 0.5s Forwards";
    if (numberMenu == 1) {
        numberMenu++;
        hidenMenu.style.animation = "navBarShow 1s forwards";
    } else {
        numberMenu--;
        hidenMenu.style.animation = "navBarHide 1s forwards";
        NavLine1.style.animation = "navBarClosingLine1 0.5s Forwards";
        NavLine2.style.animation = "navBarClosingLine2 0.5s Forwards";
    }
});

let closingNavBar = $qa('.navBarMenu a');
for (let i = 0; i < closingNavBar.length; i++) {
    closingNavBar[i].addEventListener("click", () => {

        NavLine1.style.animation = "navBarClickedLine1 0.5s Forwards";
        NavLine2.style.animation = "navBarClickedLine2 0.5s Forwards";
        if (numberMenu == 1) {
            numberMenu++;
            hidenMenu.style.animation = "navBarShow 1s forwards";
        } else {
            numberMenu--;
            hidenMenu.style.animation = "navBarHide 1s forwards";
            NavLine1.style.animation = "navBarClosingLine1 0.5s Forwards";
            NavLine2.style.animation = "navBarClosingLine2 0.5s Forwards";
        }
    });
}

let hideFunction = $class('hideMenuClose');
for (let i = 0; i < hideFunction.length; i++) {
    hideFunction[i].addEventListener("click", () => {
        if (numberMenu == 2) {
            numberMenu--;
            hidenMenu.style.animation = "navBarHide 1s forwards";
            NavLine1.style.animation = "navBarClosingLine1 0.5s Forwards";
            NavLine2.style.animation = "navBarClosingLine2 0.5s Forwards";
        }
    });
}