<?php
    include '../servidor/conexao.php';
    $listar_cliente = $conexao->query("SELECT * FROM `cliente`")->fetchAll(); 
    ?>
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
    <title>Happy Pet | Cadastrar Pets</title>
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

            <li class="item-menu" onclick="areaHide1()"><!--Clientes-->
                <a href="#">
                    <span class="icon"><i class="bi bi-person-fill"></i></span>
                    <span class="txt-link">Cliente</span>
                </a>
            </li>
        <div class="item-hide1">  
            <li class="item-menu-second"><!--Clientes Cadastro-->
                <a href="../cadastros/Cadastro-cliente.php">
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

            <li class="item-menu ativo" onclick="areaHide2()"><!--Pets-->
                <a href="#">
                    <span class="material-symbols-outlined icon">pets</span>
                    <span class="txt-link">Pets</span>
                </a>
            </li>
            <div class="item-hide2">  
                <li class="item-menu-second ativo"><!--Pets Cadastro-->
                    <a href="#">
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
    <form action="../tabelas-dados/entrada-pets.php" method="POST">
        <div id="imagebk-pet">
            <!--Imagem vai no CSS-->
        </div>
        <div id="cadastro-pet">
            <h2>Cadastrar Pet</h2>
            <div class="campo">
                <label for="name"><span class="material-symbols-outlined">sound_detection_dog_barking</span></label>
                <input type="text" name="name_pet" id="name" placeholder="Nome do animal" required>
            </div>

            <div class="campo">
                <label for="dono"><span class="material-symbols-outlined">person</span></label>
                <select name="dono_pet" id="dono" required>
                    <option selected disabled>Selecione o responsável pelo o animal</option>
                    <?php foreach($listar_cliente as $cliente){ ?>
                    <option value="<?php echo $cliente['id_cliente'];?>"><?php echo $cliente['nome_cliente'];?></option>
                    <?php }?>
                </select>
            </div>

            <div class="campo">
                <label for="animal"><span class="material-symbols-outlined">pets</span></label>
                <select name="porte_pet" id="animal" required>
                    <option selected disabled>Selecione o porte do animal</option>
                    <option>Pequeno</option>
                    <option>Médio</option>
                    <option>Grande</option>
                    <option>Gigante</option>
                </select>
            </div>

            <div class="campo">
                <label for="raca"><span class="material-symbols-outlined">pets</span></label>
                <input type="text" name="raca_pet" id="raca" maxlength="20" placeholder="Raça do animal">
            </div>
            <div class="campo-radio">
                <div id="sexo">
                    <label for="mas"><span class="material-symbols-outlined" id="male">male</span></label>
                    <input type="radio" name="sexo_pet" id="mas" value="M" checked>
                    <label for="fem"><span class="material-symbols-outlined" id="female">female</span></label>
                    <input type="radio" name="sexo_pet" id="fem" value="F">
                </div>
            </div>

            <div class="campo">
                <label for="data"><span class="material-symbols-outlined">calendar_month</span></label>
                <input type="date" name="nascimento_pet" id="data" class="data" required>
            </div>
        <input type="submit" value="Cadastrar" class="enviar">
        </div>
    </form>
    <script src="../interações/menu.js"></script>
</body>
</html>