btn_menu = document.getElementById("burger")

menu_nav = document.getElementById("menu")


function menu() {
    if (menu_nav.classList.contains('hideMenu')) {
        menu_nav.classList.add('showMenu')
        menu_nav.classList.remove('hideMenu')
    }
    else if (menu_nav.classList.contains('showMenu')) {
        menu_nav.classList.add('hideMenu')
        menu_nav.classList.remove('showMenu')
    }
}

btn_menu.addEventListener("click", menu)