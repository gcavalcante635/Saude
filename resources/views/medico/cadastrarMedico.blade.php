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
      </div>

   </div>
   </header>

<body>
    <div class="container">
    
     <div class="row">

     </div>

     <div class="row mt-3">
     <h1>Cadastrar Médico</h1>
     </div>

     <div class="row">
     <form method="POST" action="{{ route('resultadoMedico') }}">
       @csrf
       <select class="form-control form-control-lg col-md-12 mt-1" name="plantao">
          <option selected disabled value>Selecione o plantao</option>
           @foreach ($plantoes as $plantao)
           <option value="{{$plantao->id}}">{{$plantao->hora_inicial}}</option> 
           @endforeach 
           </select>
       <select class="form-control form-control-lg col-md-12 mt-1" name="consulta">
          <option selected disabled value>Selecione o centro de saúde</option>
           @foreach ($consultas as $consulta)
           <option value="{{$consulta->id}}">{{$consulta->hora_inicial}}</option> 
           @endforeach 
           </select>
        <div class="mb-3">
         <label for="nome" class="form-label">Nome Completo</label>
         <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
         <label for="crm" class="form-label">CRM</label>
         <input type="text" class="form-control" id="crm" name="crm">
        </div>
        <div class="mb-3">
         <label for="especialidade" class="form-label">Especialidade</label>
         <input type="text" class="form-control" id="especialidade" name="especialidade">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Salvar</button>
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