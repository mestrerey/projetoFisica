<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/chart.js/dist/Chart.min.css">
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <title>PROJETO FÍSICA</title>
</head>
<body>
<br><br>
<div class="container">
    <div class="row" style="padding-left: 43%;">
        <h2>Pêndulo Simples</h2>
    </div>
    <div class="row">
    </div>
    <div class="col-md-6">
        <canvas id="myChart"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="myChart2"></canvas>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary">Coletar</button>
            <button class="btn btn-primary">Limpar</button>
            <button class="btn btn-primary">Salvar</button>
            <button class="btn btn-primary">Abrir</button>
            <button class="btn btn-primary">Sair</button>
        </div>
        <div class="col-md-3 col-md-offset-3">
            <div class="btn btn-danger">Desconectar</div>
            <div class="btn btn-success">Conectar</div>
        </div>
    </div>
</div>
<script src="index.js"></script>
</body>
</html>