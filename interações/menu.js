//selecionando item a partir do clique
var menuItem = document.querySelectorAll('.item-menu')

function selectItem(){
    menuItem.forEach((item)=> 
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
    item.addEventListener('click', selectItem))

//selecionando itens secundários a partir do clique
var menuItem2 = document.querySelectorAll('.item-menu-second')

function selectItem2(){
    menuItem2.forEach((item2)=>
        item2.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem2.forEach((item2)=>
    item2.addEventListener('click', selectItem2))

//expandido o menu

var menuLateral = document.querySelector('.menu-lateral')
var btnExp = document.querySelector('#btn-exp')

btnExp.addEventListener('click', function(){
    menuLateral.classList.toggle('expandir')
})

//clicando para aparecer itens escondidos
function areaHide1(){
    let itemHide = document.querySelector('div.item-hide1')

    if(itemHide.style.display == 'none'){
        itemHide.style.display = 'block'
    } else{
        itemHide.style.display = 'none'
    }
}

function areaHide2(){
    let itemHide = document.querySelector('div.item-hide2')
    
    if(itemHide.style.display == 'none'){
        itemHide.style.display = 'block'
    } else{
        itemHide.style.display = 'none'
    }
}

function areaHide3(){
    let itemHide = document.querySelector('div.item-hide3')
    
    if(itemHide.style.display == 'none'){
        itemHide.style.display = 'block'
    } else{
        itemHide.style.display = 'none'
    }
}
