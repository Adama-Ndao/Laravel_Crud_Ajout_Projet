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
        <h1 style="font-size:50px; color:black">Liste des Projets</h1>
    </div>
    <br>
        <a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:black" href="{{ route('ajout') }}">
            Ajouter un Projet
        </a>
        <br>
        <br>
        <table>
            <tr style="background-color:lime; color:black; font-size:20px;padding:5px">
                <td>ID</td>
                <td>NOM</td>
                <!--<td>DESCRIPTION</td> -->
                <td>DATE DEBUT</td>
                <td>DATE FIN</td>
                <td>Detaile</td>
                <td>ACTION</td>
            </tr>

            @if ($projets->count() > 0)
                        @foreach ($projets as $projet) 
                            <tr>
                            <td>{{ $projet->id }}</td>
                                <td>{{ $projet->nom }}</td>
                                <!--<td> {{$projet->description }} </td> -->
                                <td> {{$projet->dateDebut }} </td>
                                <td> {{ $projet->dateFin }} </td>
                                <td> <a href="{{ route('phase', ['id' =>$projet->id]) }}">Info</a></td>
                                <td>
                                    <a style="color:red" href="{{route('delete', ['id' =>$projet->id])}}">Sup🗑</a>
                                    <a href="{{route('edit', ['id' =>$projet->id])}}">Mod✏</a>
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun projet  dans la base</span>
            @endif 
            <br>
        
        </table>
    </center>
</body>
</html>