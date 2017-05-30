<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <h1 class="page-header">Edição de Filme</h1>

            <div class="col-md-6">
                <form action="{{ route('filmes.update', $filme->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" class="form-control" type="text" name="titulo" value="{{$filme->Titulo}}">

                    </div>
                    <div class="form-group">
                        <label for="ano">Ano</label>
                        <input id="ano" class="form-control" type="text" name="ano" value="{{$filme->Ano}}">

                     </div>
                     <div class="form-group">
                        <label for="genero">Genero</label>
                        <input id="genero" class="form-control" type="text" name="genero" value="{{$filme->Genero->nome}}">
                        
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>