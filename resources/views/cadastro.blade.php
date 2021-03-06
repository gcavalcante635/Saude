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
    body{
        font-family: 'Blinker', sans-serif;
        background-color: #006400;
        color: #F0F8FF;
    }
    header{
         background-color: #32CD32;
         color: #F0F8FF;
      }
      footer{
         background-color: #32CD32;
         color: #F0F8FF;
      }
    </style>
</head>

<header> 
   <div class="container">
        
      <div class="row">
        <div class="col-md-5 mt-2">
        <h1>Sistema de Saúde</h1>
        </div>
        <div class="col-md-2">

           <a  href="{{ route('carregarSobre') }}" class="btn btn-success"><h1>Sobre</h1></a>
        </div>
        <div class="col-md-2">

           <a  href="{{ route('carregarLogin') }}" class="btn btn-success"><h1>Login</h1></a>
        </div>
        <div class="col-md-3">

           <a  href="{{ route('carregarCadastro') }}" class="btn btn-success"><h1>Cadastre-se</h1></a>
        </div>
      </div>

   </div>
   </header>

<body>
    <div class="container">
    
     <div class="row">

     </div>

     <div class="row mt-3">
     <h1>Cadastre-se</h1>
     </div>

     <div class="row">
     <form method="POST" action="{{ route('resultadoCentro') }}">
       @csrf
        <div class="mb-3">
         <label for="nome" class="form-label">Nome da Instituição</label>
         <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
         <label for="rua" class="form-label">Rua</label>
         <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="mb-3">
         <label for="bairro" class="form-label">Bairro</label>
         <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="mb-3">
         <label for="complemento" class="form-label">Complemento</label>
         <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
        <div class="mb-3">
         <label for="hora_inicial" class="form-label">Horário Inicial</label>
         <input type="text" class="form-control" id="hora_inicial" name="hora_inicial">
        </div>
        <div class="mb-3">
         <label for="hora_termino" class="form-label">Horário de termino</label>
         <input type="text" class="form-control" id="hora_termino" name="hora_termino">
        </div>
        <div class="mb-3">
         <label for="tipo" class="form-label">Tipo</label>
         <input type="text" class="form-control" id="tipo" name="tipo">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
       </form>
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

<div class="row mt-4">
   <footer>
   <center>Todos os direitos reservados - Izis Carolaine e Guilherme Cavalcante - 2021</center>
   </footer>
   </div>
   
</html>