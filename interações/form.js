    //Mask Plugin
    $('.cpf').mask('000.000.000-00', {reverse: false});
    $('.phone').mask('(00) 00000-0000');
    $('.date').mask('00/00/0000');
    $('.cep').mask('00000-000');

    //Password
    const password = window.document.querySelector('input#senha');
    const passconf = window.document.querySelector('input#confirmar');
    const icon1 = window.document.querySelector('div#icon1');
    const icon2 = window.document.querySelector('div#icon2');

    function confirmarSenha(){
      if(passconf.value === password.value){
        passconf.setCustomValidity('')
      } else {
        passconf.setCustomValidity('Senhas Diferentes')
      }
    }

    function showHide1(){
      if(password.type === 'password'){
        password.setAttribute('type','text')
        passconf.setAttribute('type','text')
        icon1.classList.add('hide')
        icon2.classList.add('hide')
      } else {
        password.setAttribute('type','password')
        passconf.setAttribute('type','password')
        icon1.classList.remove('hide')
        icon2.classList.remove('hide')
      }
    }

    function showHide2(){
      if(passconf.type === 'password'){
      passconf.setAttribute('type','text')
      password.setAttribute('type','text')
      icon2.classList.add('hide')
      icon1.classList.add('hide')
    } else {
      password.setAttribute('type','password')
      passconf.setAttribute('type','password')
      icon2.classList.remove('hide')
      icon1.classList.remove('hide')
    }
  }