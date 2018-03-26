<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Affichage d'un message d'erreur customisé si inputs non conformes -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

<!-- Affichage des messages d'erreur renvoyés par Laravel -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Formulaire : numéro de page + upload fichier -->
    <form method="POST" enctype="multipart/form-data">         
        @csrf
        <input required type="number" min="1" name="numeroPage" placeholder="numero de page">
        <input required type="file" name="filename"/>
        <input type="submit" value="entrer" name="submit">
    </form>

</body>
</html>