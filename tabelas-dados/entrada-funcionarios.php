<?php
    include '../servidor/conexao.php';

    $nome_funcionario = $_POST['name_funcionario'];
    $cpf_funcionario= $_POST['cpf_funcionario'];
    $cep_funcionario = $_POST['cep_funcionario'];
    $endereco_funcionario = $_POST['endereco_funcionario'];
    $nascimento_funcionario = $_POST['nascimento_funcionario'];
    $telefone_funcionario = $_POST['telefone_funcionario'];
    $especializacao_funcionario = $_POST['especializacao_funcionario'];

    $cadastro = $conexao->prepare("INSERT INTO `funcionario` (`nome_funcionario`, `cpf_funcionario`, `cep_funcionario`, `endereco_funcionario`, `nascimento_funcionario`, `telefone_funcionario`, `especializacao_funcionario`) VALUES ('$nome_funcionario', '$cpf_funcionario', '$cep_funcionario', '$endereco_funcionario', '$nascimento_funcionario', '$telefone_funcionario', '$especializacao_funcionario');");

    $cadastro->execute();
    if($cadastro == true){
        echo "Cliente cadastrado com sucesso!";
    }  else{
        echo "Cliente não cadastrado";
    }

    $listar_funcinario = $conexao->query("SELECT * FROM `funcionario`")->fetchAll();
?>
<!DOCTYPE html>
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
    <title>Happy Pet | Dados dos funcionários</title>
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

            <li class="item-menu ativo" onclick="areaHide3()"><!--Funcionários-->
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
                <li class="item-menu-second ativo">
                    <a href="#"><!--Funcionários Dados-->
                        <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                        <span class="txt-link">Dados</span>
                    </a>
                </li>
            </div>
        </ul>  
    </nav>
    <table>
        <thead>
            <caption>
                Entrada de dados dos funcionarios
            </caption>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Cep</th>
                <th>Endereço</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Especialização</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listar_funcinario as $dados) { ?>
            <tr>
                <td><?php echo $dados ['nome_funcionario'];?></td>
                <td><?php echo $dados ['cpf_funcionario'];?></td>
                <td><?php echo $dados ['cep_funcionario'];?></td>
                <td><?php echo $dados ['endereco_funcionario'];?></td>
                <td><?php echo $dados ['nascimento_funcionario'];?></td>
                <td><?php echo $dados ['telefone_funcionario'];?></td>
                <td><?php echo $dados ['especializacao_funcionario'];?></td>
                <td><span class="material-symbols-outlined editar">edit</span></td>
                <td><span class="material-symbols-outlined excluir">delete</span></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="../interações/tabela.js"></script>
    <script src="../interações/menu.js"></script>
</body>
</html>