<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estilos/tabela-mediaqueries.css">
    <link rel="stylesheet" href="../estilos/tabela.css">
    <link rel="stylesheet" href="../estilos/geral.css">
    <link rel="stylesheet" href="../estilos/menu.css">
    <title>Happy Pet | Dados dos pets</title>
</head>
<body>
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <span class="material-symbols-outlined" id="btn-exp">menu</span>
        </div>

        <ul> <!--Home-->
            <li class="item-menu">
                <a href="../home.html">
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
                    <a href="../cadastros/Cadastro-cliente.html">
                        <span class="icon"><i class="bi bi-person-fill-add"></i></span>
                        <span class="txt-link">Cadastrar</span>
                    </a>
                </li>
                <li class="item-menu-second"><!--Clientes Dados-->
                    <a href="../tabelas-dados/entrada-clientes.html">
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
                <li class="item-menu-second"><!--Pets Cadastro-->
                    <a href="../cadastros/Cadastro-pet.html">
                        <span class="material-symbols-outlined icon">pets</span>
                        <span class="txt-link">Cadastrar</span>
                    </a>
                </li>
                <li class="item-menu-second ativo"><!--Pets Dados-->
                    <a href="#">
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
                    <a href="../cadastros/Cadastro-funcionario.html"><!--Funcionários Cadastro-->
                        <span class="icon"><i class="bi bi-person-fill-add"></i></span>
                        <span class="txt-link">Cadastrar</span>
                    </a>
                </li>
                <li class="item-menu-second">
                    <a href="../tabelas-dados/entrada-funcionarios.html"><!--Funcionários Dados-->
                        <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                        <span class="txt-link">Dados</span>
                    </a>
                </li>
            </div>
        </ul>  
    </nav>
    <table class="wid-table">
        <thead>
            <caption>
                Entrada de dados dos Pets
            </caption>
            <tr>
                <th>Nome</th>
                <th>Porte</th>
                <th>Raça</th>
                <th>Sexo</th>
                <th>Nascimento</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Amora</td>
                <td>Pequeno</td>
                <td>Vira Lata</td>
                <td>F</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <tr>
                <td>Hunger</td>
                <td>Grande</td>
                <td>Border Collie</td>
                <td>M</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <tr>
                <td>Jujuba</td>
                <td>Pequeno</td>
                <td>Dachshund</td>
                <td>F</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <tr>
                <td>Max</td>
                <td>Médio</td>
                <td>Husky siberiano</td>
                <td>F</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <tr>
                <td>Light</td>
                <td>Pequeno</td>
                <td>Samoieda</td>
                <td>M</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <tr>
                <td>Sun</td>
                <td>Gigante</td>
                <td>Akita</td>
                <td>F</td>
                <td>00/00/0000</td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr> 
        </tbody>
    </table>
    <script src="../interações/tabela.js"></script>
    <script src="../interações/menu.js"></script>
</body>
</html>