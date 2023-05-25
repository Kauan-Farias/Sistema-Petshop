<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estilos/form.css">
    <link rel="stylesheet" href="../estilos/form-mediaqueries.css">
    <link rel="stylesheet" href="../estilos/geral.css">
    <link rel="stylesheet" href="../estilos/menu.css">
    <title>Happy Pet | Cadastrar Cliente</title>
</head>
<body>
  <nav class="menu-lateral">
    <div class="btn-expandir">
        <span class="material-symbols-outlined" id="btn-exp">menu</span>
    </div>
    
    <ul> <!--Home-->
        <li class="item-menu">
            <a href="../home.php">
                <span class="icon"><i class="bi bi-house-door-fill"></i></span>
                <span class="txt-link">Início</span>
            </a>
        </li>

        <li class="item-menu ativo" onclick="areaHide1()"><!--Clientes-->
            <a href="#">
                <span class="icon"><i class="bi bi-person-fill"></i></span>
                <span class="txt-link">Cliente</span>
            </a>
        </li>
      <div class="item-hide1">  
          <li class="item-menu-second ativo"><!--Clientes Cadastro-->
              <a href="#">
                <span class="icon"><i class="bi bi-person-fill-add"></i></span>
                <span class="txt-link">Cadastrar</span>
              </a>
          </li>
          <li class="item-menu-second"><!--Clientes Dados-->
              <a href="../tabelas-dados/entrada-clientes.php">
                <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                <span class="txt-link">Dados</span>
              </a>
          </li>
      </div>

        <li class="item-menu" onclick="areaHide2()"><!--Pets-->
            <a href="#">
                <span class="material-symbols-outlined icon">pets</span>
                <span class="txt-link">Pets</span>
            </a>
        </li>
        <div class="item-hide2">  
            <li class="item-menu-second"><!--Pets Cadastro-->
                <a href="../cadastros/Cadastro-pet.php">
                    <span class="material-symbols-outlined icon">pets</span>
                    <span class="txt-link">Cadastrar</span>
                </a>
            </li>
            <li class="item-menu-second"><!--Pets Dados-->
                <a href="../tabelas-dados/entrada-pets.php">
                    <span class="material-symbols-outlined icon">account_balance_wallet</span>
                    <span class="txt-link">Dados</span>
                </a>
            </li>
        </div>

        <li class="item-menu" onclick="areaHide3()"><!--Funcionários-->
            <a href="#">
                <span class="icon"><i class="bi bi-people-fill"></i></span>
                <span class="txt-link">Funcionários</span>
            </a>
        </li>
        <div class="item-hide3">  
            <li class="item-menu-second">
                <a href="../cadastros/Cadastro-funcionario.php"><!--Funcionários Cadastro-->
                    <span class="icon"><i class="bi bi-person-fill-add"></i></span>
                    <span class="txt-link">Cadastrar</span>
                </a>
            </li>
            <li class="item-menu-second">
                <a href="../tabelas-dados/entrada-funcionarios.php"><!--Funcionários Dados-->
                    <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                    <span class="txt-link">Dados</span>
                </a>
            </li>
        </div>
    </ul>  
  </nav>
  <form action="../tabelas-dados/entrada-clientes.php" method="POST">
      <div id="imagebk">
        <!--Imagem vai no CSS-->
      </div>
      <div id="cadastro">
        <h2>Cadastrar Clientes</h2>
          <div class="campo">
            <label for="name"><span class="material-symbols-outlined">person</span></label>
            <input type="text" name="name_cliente" id="name" placeholder="Digite o nome e sobrenome do cliente" required>   
          </div>

          <div class="campo">
            <label for="cpf"><span class="material-symbols-outlined">person</span></label>
            <input type="text" name="cpf_cliente" id="cpf" class="cpf" placeholder="Digite o CPF do cliente" required>
          </div>

          <div class="campo">
            <label for="email"><span class="material-symbols-outlined">mail</span></label>
            <input type="email" name="email_cliente" id="email" placeholder="Digite o e-mail do cliente" required>
          </div>

          <div class="campo">
            <label for="phone"><span class="material-symbols-outlined">phone_iphone</span></label>
            <input type="tel" name="telefone_cliente" id="phone" class="phone" placeholder="(00) 00000-0000" required>
          </div>

          <div class="campo">
            <label for="aniversario"><span class="material-symbols-outlined">calendar_month</span></label>
            <input type="date" name="nascimento_cliente" id="aniversario">
          </div>
          <input type="submit" value="Cadastrar" class="enviar">
      </div>
  </form>
  <!--https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html-->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="../interações/form.js"></script>
  <script src="../interações/menu.js"></script>
</body>
</html>