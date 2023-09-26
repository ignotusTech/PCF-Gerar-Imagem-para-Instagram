<?php
date_default_timezone_set('America/Sao_Paulo');
//
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os valores dos campos do formulário
    $textoDomingoDia = $_POST['diaDomingo'];
    $textoSegundaDia = $_POST['diaSegunda'];
    $textoTercaDia = $_POST['diaTerca'];
    $textoQuartaDia = $_POST['diaQuarta'];
    $textoQuintaDia = $_POST['diaQuinta'];
    $textoSextaDia = $_POST['diaSexta'];
    $textoSabadoDia = $_POST['diaSabado'];

    // Recebe os valores dos campos do formulário
    $textoDomingoSemana = $_POST['diaDomingoSemana'];
    $textoSegundaSemana = $_POST['diaSegundaSemana'];
    $textoTercaSemana = $_POST['diaTercaSemana'];
    $textoQuartaSemana = $_POST['diaQuartaSemana'];
    $textoQuintaSemana = $_POST['diaQuintaSemana'];
    $textoSextaSemana = $_POST['diaSextaSemana'];
    $textoSabadoSemana = $_POST['diaSabadoSemana'];

    // Recebe os valores dos campos de select
    $textoDomingoStreamer = $_POST['streamerNomeDomingo'];
    $textoSegundaStreamer = $_POST['streamerNomeSegunda'];
    $textoTercaStreamer = $_POST['streamerNomeTerca'];
    $textoQuartaStreamer = $_POST['streamerNomeQuarta'];
    $textoQuintaStreamer = $_POST['streamerNomeQuinta'];
    $textoSextaStreamer = $_POST['streamerNomeSexta'];
    $textoSabadoStreamer = $_POST['streamerNomeSabado'];

    // Carregar nome do arquivo de imagens dos stramers
    $streamerTamanho = imagecreatefrompng('streamer' . TAMANHO . '.png');
    $streamerDomingo = imagecreatefrompng('streamer' . $textoDomingoStreamer . '.png');
    $streamerSegunda = imagecreatefrompng('streamer' . $textoSegundaStreamer . '.png');
    $streamerTerca = imagecreatefrompng('streamer' . $textoTercaStreamer . '.png');
    $streamerQuarta = imagecreatefrompng('streamer' . $textoQuartaStreamer . '.png');
    $streamerQuinta = imagecreatefrompng('streamer' . $textoQuintaStreamer . '.png');
    $streamerSexta = imagecreatefrompng('streamer' . $textoSextaStreamer . '.png');
    $streamerSabado = imagecreatefrompng('streamer' . $textoSabadoStreamer . '.png');

    //IF PARA CONTAR AS LIVES
    //
    $quantidadededias = 0;
    if ($textoDomingoStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerDomingo,
            'TextoSemana' => $textoDomingoDia,
            'TextoDia' => $textoDomingoSemana,
            'TextoStreamer' => $textoDomingoStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoSegundaStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerSegunda,
            'TextoSemana' => $textoSegundaDia,
            'TextoDia' => $textoSegundaSemana,
            'TextoStreamer' => $textoSegundaStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoTercaStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerTerca,
            'TextoSemana' => $textoTercaDia,
            'TextoDia' => $textoTercaSemana,
            'TextoStreamer' => $textoTercaStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoQuartaStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerQuarta,
            'TextoSemana' => $textoQuartaDia,
            'TextoDia' => $textoQuartaSemana,
            'TextoStreamer' => $textoQuartaStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoQuintaStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerQuinta,
            'TextoSemana' => $textoQuintaDia,
            'TextoDia' => $textoQuintaSemana,
            'TextoStreamer' => $textoQuintaStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoSextaStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerSexta,
            'TextoSemana' => $textoSextaDia,
            'TextoDia' => $textoSextaSemana,
            'TextoStreamer' => $textoSextaStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }
    if ($textoSabadoStreamer != "SEMLIVE") {
        $quantidadededias = $quantidadededias + 1;
        //criando array
        $novoItem = array(
            'streamer' => $streamerSabado,
            'TextoSemana' => $textoSabadoDia,
            'TextoDia' => $textoSabadoSemana,
            'TextoStreamer' => $textoSabadoStreamer
        );
        // Adicione o novo item ao array existente
        $informacoes[] = $novoItem;
    }


}
//
// Carregar a imagem de fundo
$fundo = imagecreatefrompng('fundo.png');

// Carregar o logotipo cima e baixo
$logotipo = imagecreatefrompng('logoCima.png');
$rodape = imagecreatefrompng('logoBaixo.png');


// Obter as dimensões do logotipo
$larguraLogo = imagesx($logotipo);
$alturaLogo = imagesy($logotipo);

// Obter as dimensões do rodapé
$larguraRodape = imagesx($rodape);
$alturaRodape = imagesy($rodape);

// Obter as dimensões do streamerTamanho
$largurastreamer = imagesx($streamerTamanho);
$alturastreamer = imagesy($streamerTamanho);

// Criar uma nova imagem em branco com as mesmas dimensões do fundo
$largura = imagesx($fundo);
$altura = imagesy($fundo);
$imagem = imagecreatetruecolor($largura, $altura);

// Definir a cor de fundo para a nova imagem (você pode ajustar a cor conforme necessário)
$corFundo = imagecolorallocate($imagem, 255, 255, 255);

// Preencher a nova imagem com a cor de fundo
imagefill($imagem, 0, 0, $corFundo);

// Mesclar a imagem de fundo com a nova imagem
imagecopy($imagem, $fundo, 0, 0, 0, 0, $largura, $altura);

// Coordenadas para o posicionamento do logotipo no topo
$posicaoXLogo = 225; // 225 pixels da esquerda
$posicaoYLogo = 30; // 30 pixels do topo

// Mesclar o logotipo na nova imagem
imagecopy($imagem, $logotipo, $posicaoXLogo, $posicaoYLogo, 0, 0, $larguraLogo, $alturaLogo);

// Coordenadas para o posicionamento do rodapé
$posicaoXRodape = 350; // 350 pixels da esquerda
$posicaoYRodape = 970; // 950 pixels do topo

// Mesclar o rodapé na nova imagem
imagecopy($imagem, $rodape, $posicaoXRodape, $posicaoYRodape, 0, 0, $larguraRodape, $alturaRodape);

// Definir a cor do textos
$corTextoSemana = imagecolorallocate($imagem, 255, 0, 0); // Cor vermelha
$corTextoDia = imagecolorallocate($imagem, 255, 255, 255);
$corTextoStreamer = imagecolorallocate($imagem, 255, 255, 255);

// Caminho para o arquivo de fonte TTF (times.ttf)
$fonteTTF = 'big_noodle_titling';
//$fonteTTFNick = 'big_noodle_titling_oblique';
$fonteTTFNick = 'big_noodle_titling';
// 1 LIVES
//
//
if ($quantidadededias === 1) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 350, 550, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 600, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 600, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 660, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
}
// 2 LIVES
//
//
if ($quantidadededias === 2) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 350, 400, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 450, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 450, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 510, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 350, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 700, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 700, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
}
// 3 LIVES
//
//
if ($quantidadededias === 3) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 150, 400, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 450, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 450, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 510, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 600, 400, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 450, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 450, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 510, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
    // Adicionar o texto e imagem 3
    imagecopy($imagem, $informacoes[2]['streamer'], 350, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 700, $corTextoSemana, $fonteTTF, $informacoes[2]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 700, $corTextoDia, $fonteTTF, $informacoes[2]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[2]['TextoStreamer']);
}
// 4 LIVES
//
//
if ($quantidadededias === 4) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 150, 400, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 450, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 450, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 510, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 600, 400, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 450, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 450, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 510, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
    // Adicionar o texto e imagem 3
    imagecopy($imagem, $informacoes[2]['streamer'], 150, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 700, $corTextoSemana, $fonteTTF, $informacoes[2]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 700, $corTextoDia, $fonteTTF, $informacoes[2]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[2]['TextoStreamer']);
    // Adicionar o texto e imagem 4
    imagecopy($imagem, $informacoes[3]['streamer'], 600, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 700, $corTextoSemana, $fonteTTF, $informacoes[3]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 700, $corTextoDia, $fonteTTF, $informacoes[3]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[3]['TextoStreamer']);
}
// 5 LIVES
//
//
if ($quantidadededias === 5) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 150, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 400, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 400, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 600, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 400, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 400, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
    // Adicionar o texto e imagem 3
    imagecopy($imagem, $informacoes[2]['streamer'], 150, 550, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 600, $corTextoSemana, $fonteTTF, $informacoes[2]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 600, $corTextoDia, $fonteTTF, $informacoes[2]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 660, $corTextoStreamer, $fonteTTFNick, $informacoes[2]['TextoStreamer']);
    // Adicionar o texto e imagem 4
    imagecopy($imagem, $informacoes[3]['streamer'], 600, 550, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 600, $corTextoSemana, $fonteTTF, $informacoes[3]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 600, $corTextoDia, $fonteTTF, $informacoes[3]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 660, $corTextoStreamer, $fonteTTFNick, $informacoes[3]['TextoStreamer']);
    // Adicionar o texto e imagem 5
    imagecopy($imagem, $informacoes[4]['streamer'], 350, 750, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 800, $corTextoSemana, $fonteTTF, $informacoes[4]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 800, $corTextoDia, $fonteTTF, $informacoes[4]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 860, $corTextoStreamer, $fonteTTFNick, $informacoes[4]['TextoStreamer']);
}
// 6 LIVES
//
//
if ($quantidadededias === 6) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 150, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 400, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 400, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 600, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 400, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 400, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
    // Adicionar o texto e imagem 3
    imagecopy($imagem, $informacoes[2]['streamer'], 150, 550, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 600, $corTextoSemana, $fonteTTF, $informacoes[2]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 600, $corTextoDia, $fonteTTF, $informacoes[2]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 660, $corTextoStreamer, $fonteTTFNick, $informacoes[2]['TextoStreamer']);
    // Adicionar o texto e imagem 4
    imagecopy($imagem, $informacoes[3]['streamer'], 600, 550, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 600, $corTextoSemana, $fonteTTF, $informacoes[3]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 600, $corTextoDia, $fonteTTF, $informacoes[3]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 660, $corTextoStreamer, $fonteTTFNick, $informacoes[3]['TextoStreamer']);
    // Adicionar o texto e imagem 5
    imagecopy($imagem, $informacoes[4]['streamer'], 150, 750, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 800, $corTextoSemana, $fonteTTF, $informacoes[4]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 800, $corTextoDia, $fonteTTF, $informacoes[4]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 860, $corTextoStreamer, $fonteTTFNick, $informacoes[4]['TextoStreamer']);
    // Adicionar o texto e imagem 6
    imagecopy($imagem, $informacoes[5]['streamer'], 600, 750, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 800, $corTextoSemana, $fonteTTF, $informacoes[5]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 800, $corTextoDia, $fonteTTF, $informacoes[5]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 860, $corTextoStreamer, $fonteTTFNick, $informacoes[5]['TextoStreamer']);
}
// 7 LIVES
//
//
if ($quantidadededias === 7) {
    // Adicionar o texto e imagem 1    
    imagecopy($imagem, $informacoes[0]['streamer'], 150, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 400, $corTextoSemana, $fonteTTF, $informacoes[0]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 400, $corTextoDia, $fonteTTF, $informacoes[0]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[0]['TextoStreamer']);
    // Adicionar o texto e imagem 2
    imagecopy($imagem, $informacoes[1]['streamer'], 600, 350, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 400, $corTextoSemana, $fonteTTF, $informacoes[1]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 400, $corTextoDia, $fonteTTF, $informacoes[1]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 460, $corTextoStreamer, $fonteTTFNick, $informacoes[1]['TextoStreamer']);
    // Adicionar o texto e imagem 3
    imagecopy($imagem, $informacoes[2]['streamer'], 150, 500, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 550, $corTextoSemana, $fonteTTF, $informacoes[2]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 550, $corTextoDia, $fonteTTF, $informacoes[2]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 610, $corTextoStreamer, $fonteTTFNick, $informacoes[2]['TextoStreamer']);
    // Adicionar o texto e imagem 4
    imagecopy($imagem, $informacoes[3]['streamer'], 600, 500, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 550, $corTextoSemana, $fonteTTF, $informacoes[3]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 550, $corTextoDia, $fonteTTF, $informacoes[3]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 610, $corTextoStreamer, $fonteTTFNick, $informacoes[3]['TextoStreamer']);
    // Adicionar o texto e imagem 5
    imagecopy($imagem, $informacoes[4]['streamer'], 150, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 310, 700, $corTextoSemana, $fonteTTF, $informacoes[4]['TextoSemana']);
    imagettftext($imagem, 30, 0, 380, 700, $corTextoDia, $fonteTTF, $informacoes[4]['TextoDia']);
    imagettftext($imagem, 46, 0, 310, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[4]['TextoStreamer']);
    // Adicionar o texto e imagem 6
    imagecopy($imagem, $informacoes[5]['streamer'], 600, 650, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 760, 700, $corTextoSemana, $fonteTTF, $informacoes[5]['TextoSemana']);
    imagettftext($imagem, 30, 0, 830, 700, $corTextoDia, $fonteTTF, $informacoes[5]['TextoDia']);
    imagettftext($imagem, 46, 0, 760, 760, $corTextoStreamer, $fonteTTFNick, $informacoes[5]['TextoStreamer']);
    // Adicionar o texto e imagem 7
    imagecopy($imagem, $informacoes[6]['streamer'], 350, 800, 0, 0, $largurastreamer, $alturastreamer);
    imagettftext($imagem, 30, 0, 510, 850, $corTextoSemana, $fonteTTF, $informacoes[6]['TextoSemana']);
    imagettftext($imagem, 30, 0, 580, 850, $corTextoDia, $fonteTTF, $informacoes[6]['TextoDia']);
    imagettftext($imagem, 46, 0, 510, 910, $corTextoStreamer, $fonteTTFNick, $informacoes[6]['TextoStreamer']);
}
// Definir o cabeçalho HTTP para uma imagem PNG
header('Content-Type: image/png');

// Definir o nome do arquivo para salvar
//header('Content-Disposition: attachment; filename="PCF-PostagemAgendaSemana.png"');

// Prevenir o cache
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Nome do arquivo de saída
$nomeArquivo = 'PCF-AgendaSemana.png';

// Salvar a imagem no servidor
imagepng($imagem, $nomeArquivo);

// Redirecionar o usuário para a imagem gerada
header('Location: ' . $nomeArquivo);

// Exibir a nova imagem no navegador
imagepng($imagem);

// Liberar a memória
imagedestroy($fundo);
imagedestroy($logotipo);
imagedestroy($rodape);
imagedestroy($streamerSegunda);
imagedestroy($streamerTerca);
imagedestroy($streamerQuarta);
imagedestroy($streamerQuinta);
imagedestroy($streamerSexta);
imagedestroy($streamerSabado);
imagedestroy($streamerDomingo);
imagedestroy($imagem);
?>