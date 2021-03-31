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
      
    </div>

    <div class="row mt-3">
    <form method="POST" action="{{ route('carregarLogin') }}">
       @csrf
        <div class="mb-3">
         <label for="cnpj" class="form-label"><h1>CNPJ</h1></label>
         <input type="text" class="form-control" id="cnpj" name="cnpj">
        </div>
        <div class="mb-3">
         <label for="senha" class="form-label"><h1>Senha</h1></label>
         <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
       </form>
       <div class="row mt-2">

          <a  href="{{ route('carregarRecuperação') }}" class="btn btn-primary">Esqueci minha senha</a>
       </div>
       <div class="row mt-2">
       <a  href="{{ route('carregarCadastro') }}" class="btn btn-primary">Não possui uma conta? Cadastre-se</a>
       </div>
    </div>
    
    </div>
</body>
</html>