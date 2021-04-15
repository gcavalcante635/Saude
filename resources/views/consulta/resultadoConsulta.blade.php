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
    </style>
</head>

   <header> 
   <div class="container">
        
      <div class="row ">
        <div class="col-md-10 mt-2">
        <h1>Sistema de Saúde</h1>
        </div>
        <div class="col-md-2">

           <a  href="{{ route('carregarSobre') }}" class="btn btn-success"><h1>Sobre</h1></a>
        </div>
      </div>

   </div>
   </header>

<body>
<div class="row">
   <h1> Cadastro da Consulta efetuado com sucesso! </h1>
   </div>

   <div class="row mt-3">
   <div class="col-md-2">Horário Inicial</div>
   <div class="col-md-2">Orlando</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Horário de termino</div>
   <div class="col-md-2">4335425</div>
   </div>

   
   <div class="row mt-2">
   <div class="col-md-2">Data</div>
   <div class="col-md-2">4335425</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Especialidade</div>
   <div class="col-md-2">Dermatologista</div>
   </div>

</body>
</html>