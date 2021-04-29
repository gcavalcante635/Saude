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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
      .row-striped:nth-of-type(odd){
  border-left: 4px #efefef solid;
  background-color: #32CD32;
}

.row-striped:nth-of-type(even){
  border-left: 4px #efefef solid;
  background-color: #32CD32;
}

.row-striped {
    padding: 15px 0;
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
     <div class="row mt-2">
       <center><h2>Menu do Administrador</h2></center>
     </div>
     <div class="row mt-2">
       
     <a  href="{{ route('medico') }}" class="btn btn-success"><h1>Cadastrar Médico</h1></a>
     </div>
     <div class="row mt-2">
       
       <a  href="{{ route('consulta') }}" class="btn btn-success"><h1>Cadastrar Consulta</h1></a>
     </div>
     <div class="row mt-2">
       
       <a  href="{{ route('plantao') }}" class="btn btn-success"><h1>Cadastrar Plantão</h1></a>
     </div>
     <div class="row mt-2">

       <a  href="{{ route('listaMedicoAdm') }}" class="btn btn-success"><h1>Lista de Médicos</h1></a>
     </div>
     <div class="row mt-2">

       <a  href="{{ route('listaCentro') }}" class="btn btn-success"><h1>Lista de Centros</h1></a>
     </div>
     <div class="row mt-2">

       <a  href="{{ route('listaCentro') }}" class="btn btn-success"><h1>Lista de Consultas</h1></a>
     </div>
     <div class="row mt-2">

       <a  href="{{ route('listaCentro') }}" class="btn btn-success"><h1>Lista de Plantões</h1></a>
     </div>
  
     </div>

</body>

</html>