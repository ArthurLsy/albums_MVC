btn_change = document.getElementById("change_album")

bloc = document.getElementById("bloc_change_album")


function change() {
    if (bloc.classList.contains('hide_change_album')) {
        bloc.classList.add('show_change_album')
        bloc.classList.remove('hide_change_album')
    }
    else if (bloc.classList.contains('show_change_album')) {
        bloc.classList.add('hide_change_album')
        bloc.classList.remove('show_change_album')
    }
}

btn_change.addEventListener("click", change)