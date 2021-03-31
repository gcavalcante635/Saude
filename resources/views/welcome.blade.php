<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <style>
    <body>
    {
        font-family: 'Blinker', sans-serif;
    }
    </style>
</head>
<body>
   <div class="container">
        
      <div class="row">
        <div class="col">
        <h1>Sistema de Saúde</h1>
        </div>
        <div class="col">

           <a  href="{{ route('carregarSobre') }}" class="btn btn-primary"><h1>Sobre</h1></a>
        </div>
        <div class="col">

           <a  href="{{ route('carregarLogin') }}" class="btn btn-primary"><h1>Login</h1></a>
        </div>
        <div class="col">

           <a  href="{{ route('carregarCadastro') }}" class="btn btn-primary"><h1>Cadastre-se</h1></a>
        </div>
      </div>

   </div>
</body>
</html>
