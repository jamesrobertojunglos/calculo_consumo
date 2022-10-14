<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de sonsumo de Cobustível</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
    <div class="painel">
        <h2>Resultado do cálculo de consumo</h2>
        <div class="conteudo-painel">
            <div class='sucesso'>
                <h3>O valor gasto será de</3>
                <ul>
                    <li><b>Gasolina:</b> R$ {{$valor}}</li>
                </ul>
</div>
        <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
        </div>
    </div> 
</body>
</html>