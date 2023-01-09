<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div style="background:lime; border-radius:10px;padding:5px">
            <h1 style="font-size:50px; color:black">La Phase du Projet</h1>
        </div>
        <br>
        <p><span style="font-size:20px; color:balck; font-weight : bold;">Nom du projet : </span>{{$projet->nom}}</p>
        <br>
        <a style="border:1px solid; background:lime; border-radius:10px; padding:5px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('projet') }}">
             Liste des Projets
        </a>
        <br>
        <br>
        <table>
            <tr style="background-color:lime; color:black; font-size:20px;padding:5px">
                <td>ID</td>
                <td>NOM</td>
                <td>DUREE</td>
                <td>PRIORITE</td>
                <td>ACTION</td>
            </tr>
            @if ($projet->count() > 0)
                        @foreach ($projet->phases as $phase) 
                            <tr>
                            <td>{{ $phase->id }}</td>
                                <td>{{ $phase->nom }}</td>
                                <td> {{$phase->duree }} </td>
                                <td> {{ $phase->priorite }} </td>
                                <td>
                                    <a style="color:red" href="{{route('supprimer', ['id' =>$phase->id])}}">Sup🗑</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucune phase dans la base</span>
            @endif 
        </table>
        <br>
        <br>
        <a style="border:1px solid; background:lime; border-radius:10px; padding:5px;
                font-size:20px;marging-bottom:10px; color:black" href="{{ route('ajouter', ['id' =>$projet->id]) }}">
                Ajouter une Phase
        </a>
        
    </center>
</body>
</html>