
function menu(){
    let itens = window.document.getElementById('itens')
    let menu = window.document.getElementById('hamburger-menu')
    
    if(itens.style.display == 'none'){
        itens.style.display = 'block'
        menu.classList.add('menuclick')
    } else {
        itens.style.display = 'none'
        menu.classList.remove('menuclick')
    }
}