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
     <h1>Cadastre-se</h1>
     </div>

     <div class="row">
     <form method="POST" action="{{ route('carregarCadastro') }}">
       @csrf
        <div class="mb-3">
         <label for="nome" class="form-label"><h1>Nome da Instituição</h1></label>
         <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
         <label for="cnpj" class="form-label"><h1>CNPJ</h1></label>
         <input type="text" class="form-control" id="cnpj" name="cnpj">
        </div>
        <div class="mb-3">
         <label for="bairro" class="form-label"><h1>Bairro</h1></label>
         <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="mb-3">
         <label for="rua" class="form-label"><h1>Rua</h1></label>
         <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="mb-3">
         <label for="numero" class="form-label"><h1>Número</h1></label>
         <input type="text" class="form-control" id="numero" name="numero">
        </div>
        <div class="mb-3">
         <label for="complemento" class="form-label"><h1>Complemento</h1></label>
         <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
        <div class="mb-3">
         <label for="instagram" class="form-label"><h1>Instagram</h1></label>
         <input type="text" class="form-control" id="instagram" name="instagram">
        </div>
        <div class="mb-3">
         <label for="facebook" class="form-label"><h1>Facebook</h1></label>
         <input type="text" class="form-control" id="facebook" name="facebook">
        </div>
        <div class="mb-3">
         <label for="email" class="form-label"><h1>E-mail</h1></label>
         <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
         <label for="twitter" class="form-label"><h1>Twitter</h1></label>
         <input type="text" class="form-control" id="twitter" name="twitter">
        </div>
        <div class="mb-3">
         <label for="senha" class="form-label"><h1>Senha</h1></label>
         <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="mb-3">
         <label for="confirmarsenha" class="form-label"><h1>Confirmar senha</h1></label>
         <input type="password" class="form-control" id="confirmarsenha" name="confirmarsenha">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Concluir</button>
        </div>
       </form>
       <div class="row mt-2">

         <a  href="{{ route('carregarLogin') }}" class="btn btn-primary">Já possui uma conta? Entrar</a>
       </div>
       <div class="mb-3 form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso</label>
       </div>
       <div class="mb-3 form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Desejo receber notificação</label>
       </div>
     </div>

    </div>
</body>
</html>