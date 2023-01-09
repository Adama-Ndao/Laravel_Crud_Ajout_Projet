<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <div style="background:blue; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire Modification Phase</h1>
            </div>
            <br>
            <form method="POST" action="{{ route('updated.phase', ['id' =>$phase->id])}}">
                @csrf
                <input type="hidden" name="id" value="{{$phase->projet_id}}">
                <input type="text" name="nom"  value="{{$phase->nom}}" placeholder="Nom">
                <input type="number" name="duree"  value="{{$phase->duree}}" placeholder="duree">
                <input type="text" name="priorite"  value="{{$phase->priorite}}" placeholder="priorite">
                <input type="submit" name="" value="Modifier">

            </form>
        </center>
        
       
    </body>
</html>