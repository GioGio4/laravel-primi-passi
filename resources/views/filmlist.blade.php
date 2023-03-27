<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
<a href="{{route ('Homepage')}}">Torna indietro</a>

 <ul>
    @foreach ($films as $film)
    <li>{{$film}}</li>   
    @endforeach
 </ul>

</body>

</html>