<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='POST' action="{{ route('movies.store') }}">
        @csrf
        <div>
            <label for="title">Titolo</label>
            <input type="text" name='title' id='title'>
        </div>
        <hr>
        <div>
            <label for="genres">Genere</label>
            <input type="text" name='genres' id='genres'>
        </div>
        <hr>
        <div>
            <label for="date_release">Data di rilascio</label>
            <input type="text" name='date_release' id='date_release'>
        </div>
        <hr>
        <div>
            <label for="poster_path">Immagine di copertina</label>
            <input type="text" name='poster_path' id='poster_path'>
        </div>
        <hr>
        <div>
            <label for="overview">Descrizione</label>
            <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
        </div>
        <hr>
        <button type="submit">Invia</button>
    </form>
</body>
</html>