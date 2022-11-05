<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>{{$name}}--{{$age}}{{' ans'}}--{{$classe}}</p>

<p>{{$obj->name}}</p>

<p>{{$ar['a']}}</p>

@if($obj->name == 'Youssef')
    {{'Yes'}}
@else  
    {{'No'}}     
@endif


@foreach($ar as $name)
    <p>{{$name}}</p>
@endforeach
</body>
</html>