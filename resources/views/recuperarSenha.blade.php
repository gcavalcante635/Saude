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

    <h1>Recupere sua senha</h1>

    <div class="row">
    <form method="POST" action="{{ route('carregarRecuperação') }}">
       @csrf
        <div class="mb-3">
         <label for="emailr" class="form-label"><h1>E-mail</h1></label>
         <input type="text" class="form-control" id="emailr" name="emailr">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
       </form>
       </div>
    
    </div>
</body>
</html>