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
            <div style="background:lime; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:black">Formulaire de modification</h1>
            </div>
            <br>
            <form method="POST" action="{{ route('update', ['id' =>$projets->id]) }}">
                @csrf
                <input type="text" name="nom" value="{{$projets->nom}}"  placeholder="nom">
                <br>
                <br>
                <input type="text" name="description" value="{{$projets->description}}" placeholder="description">
                <br>
                <br>
                <input type="date" name="dateDebut" value="{{$projets->dateDebut}}" placeholder="dateDebut">
                <br>
                <br>
                <input type="date" name="dateFin" value="{{$projets->dateFin}}" placeholder="dateFin">
                <br>
                <br>
                <input type="submit" name="" value="Modifier">

            </form>
            <br>
            <br>
            <!--<a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('projet') }}">
             Liste des Projets</a> -->
        </center>
        
       
    </body>
</html>