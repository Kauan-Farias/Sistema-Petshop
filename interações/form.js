    //Mask Plugin
    $('#cpf').mask('000.000.000-00', {reverse: false});
    $('#phone').mask('(00) 00000-0000');
    $('#date').mask('00/00/0000');

    //Meu
    var password = window.document.querySelector('input#senha')
    var passconf = window.document.querySelector('input#senhaconfirm')
    var icon1 = window.document.querySelector('div#icon1')
    var icon2 = window.document.querySelector('div#icon2')

    function showHide1(){
      if(password.type === 'password'){
        password.setAttribute('type','text');
        icon1.classList.add('hide')
      } else {  
        password.setAttribute('type','password');
        icon1.classList.remove('hide')
      }
    }

    function showHide2(){
      if(passconf.type === 'password'){
        passconf.setAttribute('type','text');
        icon2.classList.add('hide')
      } else {  
        passconf.setAttribute('type','password');
        icon2.classList.remove('hide')
      }
    }
