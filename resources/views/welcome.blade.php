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
    
   <div class="container">
      <div class="row">
      <div class="col-md-4">
      <center><h2>Principais Consultas</h2></center>
      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-success">An item</li> <br>
        <li class="list-group-item list-group-item-success">A second item</li> <br>
        <li class="list-group-item list-group-item-success">A third item</li> <br>
        <li class="list-group-item list-group-item-success">A fourth item</li> <br>
        <li class="list-group-item list-group-item-success">And a fifth one</li> <br>
      </ul>
      <div class="row mt-2">

         <a  href="{{ route('listaMedico') }}" class="btn btn-success"><h1>Ver mais informações sobre médicos</h1></a>
      </div>
      <div class="row mt-2">

         <a  href="{{ route('listaCentro') }}" class="btn btn-success"><h1>Ver mais informações sobre Centros de Saúde</h1></a>
      </div>
      </div>

      <div class="col-md-4">
       <center><h2>Importante</h2></center> 
       <center><h3>Projeto desenvolvido pelos alunos do Curso de Informática 3 do IFMA - Campus Avançado de Porto Franco MA</h3></center>
      </div>

      <div class="col-md-4">
      <center><h2>Plantão</h2></center>
      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-success">An item</li> <br>
        <li class="list-group-item list-group-item-success">A second item</li> <br>
        <li class="list-group-item list-group-item-success">A third item</li> <br>
        <li class="list-group-item list-group-item-success">A fourth item</li> <br>
        <li class="list-group-item list-group-item-success">And a fifth one</li> <br>
      </ul>
      </div>

      </div>

</div>

   </body>

</html>
