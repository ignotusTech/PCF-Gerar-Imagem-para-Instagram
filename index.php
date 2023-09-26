<!DOCTYPE html>
<html>

<head>
    <title>Poker com Falinha - Gerar Imagem Semana</title>
    <link rel="shortcut icon" href="favico.png" />
    <style>
        body {
            background-color: #000;
            /* Define o fundo como preto */
            color: #fff;
            /* Define a cor do texto como branco */
        }

        /* Estilo para alinhar o conteúdo à direita */
        .conteudo-direita {
            text-align: right;
        }

        /* Estilo para o formulário */
        form {
            text-align: left;
        }

        /* Estilo para os rótulos */
        label {
            display: inline-block;
            width: 150px;
            margin-right: 10px;
        }

        /* Estilo para os elementos <select> */
        select {
            width: 200px;
            padding: 10px;
            /* Adicione algum espaço interno para melhorar a aparência */
            border: 1px solid #ccc;
            /* Adicione uma borda */
            border-radius: 5px;
            /* Arredonde as bordas */
            background-color: black;
            /* Define a cor de fundo como preto */
            color: white;
            /* Define a cor do texto como branco */
        }

        /* Estilo para o botão */
        input[type="submit"] {
            padding: 10px 20px;
            /* Adicione espaço interno ao botão */
            background-color: #ed3237;
            /* Cor de fundo */
            color: #fff;
            /* Cor do texto */
            border: none;
            /* Remova a borda */
            border-radius: 5px;
            /* Arredonde as bordas */
            cursor: pointer;
            /* Mude o cursor para uma mãozinha ao passar o mouse */
        }

        /* Estilo para alterar a cor do botão ao passar o mouse */
        input[type="submit"]:hover {
            background-color: #ab2c2e;
            /* Cor de fundo ao passar o mouse */
        }
    </style>

</head>

<body>

    <img src="logoBaixo.png">
    <br />Gerar imagem para postar com a escolha dos streamer para cada dia da semana.
    <br /><br />
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    // Data informada
    $dataInformada = "10/10/2023"; //INFORMAR A DATA MANUALMENTE
    $dataInformada = date("d/m/Y"); //DATA INFORMADA AUTOMATICAMENTE COM O DIA DE HOJE
    

    // Converte a data informada para um objeto DateTime
    $data = DateTime::createFromFormat('d/m/Y', $dataInformada);

    // Define um array com os nomes dos dias da semana
    $diasDaSemana = array('DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO');

    // Encontra o índice do dia da semana da data informada
    $indiceDiaInformado = $data->format('w');

    // Calcula a diferença de dias para chegar ao próximo domingo
    $diferencaDias = 7 - $indiceDiaInformado;

    // Inicializa um array para armazenar os resultados
    $resultados = array();

    // Loop para calcular as datas dos próximos 7 dias
    for ($i = 0; $i < 7; $i++) {
        // Calcula a data do próximo dia
        $data->modify('+' . ($i == 0 ? $diferencaDias : 1) . ' day');

        // Armazena o nome do dia da semana e a data correspondente em variáveis separadas
        $nomeDia = $diasDaSemana[$data->format('w')];
        $dataFormatada = $data->format('d.m');

        // Armazena as informações em um array associativo
        $resultados[$nomeDia] = $dataFormatada;
    }

    // Exibe os resultados
    //print_r($resultados);
    $diaDomingo = $resultados['DOMINGO'];
    $diaSegunda = $resultados['SEGUNDA'];
    $diaTerca = $resultados['TERÇA'];
    $diaQuarta = $resultados['QUARTA'];
    $diaQuinta = $resultados['QUINTA'];
    $diaSexta = $resultados['SEXTA'];
    $diaSabado = $resultados['SÁBADO'];
    //echo "$diaDomingo";
    foreach ($resultados as $dia => $data) {
        //echo $dia[1] . ": " . $data[2] . "<br>";
    }
    ?>
    <form action="imagem.php" method="post">
        <!-- Campo de entrada de texto oculto -->
        <input type="hidden" name="diaDomingo" value="<?php echo $diaDomingo ?>">
        <input type="hidden" name="diaSegunda" value="<?php echo $diaSegunda ?>">
        <input type="hidden" name="diaTerca" value="<?php echo $diaTerca ?>">
        <input type="hidden" name="diaQuarta" value="<?php echo $diaQuarta ?>">
        <input type="hidden" name="diaQuinta" value="<?php echo $diaQuinta ?>">
        <input type="hidden" name="diaSexta" value="<?php echo $diaSexta ?>">
        <input type="hidden" name="diaSabado" value="<?php echo $diaSabado ?>">
        <!-- Campo de entrada de texto oculto -->
        <input type="hidden" name="diaDomingoSemana" value="DOMINGO">
        <input type="hidden" name="diaSegundaSemana" value="SEGUNDA">
        <input type="hidden" name="diaTercaSemana" value="TERÇA">
        <input type="hidden" name="diaQuartaSemana" value="QUARTA">
        <input type="hidden" name="diaQuintaSemana" value="QUINTA">
        <input type="hidden" name="diaSextaSemana" value="SEXTA">
        <input type="hidden" name="diaSabadoSemana" value="SÁBADO">
        <!-- Campos de entrada de option com os dias da semana -->
        <label for="<?php echo $diaDomingo ?>">
            <?php echo "$diaDomingo DOMINGO" ?>:
        </label>
        <select name="streamerNomeDomingo">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaSegunda ?>">
            <?php echo "$diaSegunda SEGUNDA" ?>:
        </label>
        <select name="streamerNomeSegunda">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaTerca ?>">
            <?php echo "$diaTerca TERÇA" ?>:
        </label>
        <select name="streamerNomeTerca">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaQuarta ?>">
            <?php echo "$diaQuarta QUARTA" ?>:
        </label>
        <select name="streamerNomeQuarta">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaQuinta ?>">
            <?php echo "$diaQuinta QUINTA" ?>:
        </label>
        <select name="streamerNomeQuinta">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaSexta ?>">
            <?php echo "$diaSexta SEXTA" ?>:
        </label>
        <select name="streamerNomeSexta">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br /><br />
        <label for="<?php echo $diaSabado ?>">
            <?php echo "$diaSabado SÁBADO" ?>:
        </label>
        <select name="streamerNomeSabado">
            <option value="SEMLIVE">SEM LIVE</option>
            <option value="ABACATE">ABACATE</option>
            <option value="ADALTO">ADALTO</option>
            <option value="AMARULA">AMARULA</option>
            <option value="BÁRBARA">BÁRBARA</option>
            <option value="BRICK">BRICK</option>
            <option value="CORBA">CORBA</option>
            <option value="FORMIGA">FORMIGA</option>
            <option value="POLENTANI">POLENTANI</option>
            <option value="RONAN">RONAN</option>
            <option value="SAULO">SAULO</option>
            <option value="TATA">TATA</option>
            <option value="VITOI">VITOI</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
<div class="conteudo-direita">
    <hr />
    <img src="https://img.shields.io/static/v1?label=ignotus&message=Tech&color=FB923C">
    </p>
</div>

</html>