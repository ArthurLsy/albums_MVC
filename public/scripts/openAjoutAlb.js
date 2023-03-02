btn_alb = document.getElementById("btn_ajout_alb")

bloc = document.getElementById("bloc_ajout_alb")


function change() {
    if (bloc.classList.contains('hide_add_album')) {
        bloc.classList.add('show_add_album')
        bloc.classList.remove('hide_add_album')
    }
    else if (bloc.classList.contains('show_add_album')) {
        bloc.classList.add('hide_add_album')
        bloc.classList.remove('show_add_album')
    }
}

btn_alb.addEventListener("click", change)