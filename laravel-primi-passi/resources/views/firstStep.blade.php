<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Questo è il primo esercizio con Laravel</h1>

       
        
            @for ($i = 1; $i <= 10; $i++)
            <div class="subcontainer">
                
                <h3>Paragrafo {{$i}}</h3>
               
                    <img src="{{asset('/img/laravel.png')}}">
                
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi hic pariatur nihil dolorem accusantium quisquam repellendus incidunt quibusdam qui, eius assumenda, autem itaque a quos at inventore nisi esse. Officiis.</p>
                
                <a href="https://laravel.com/docs/8.x/readme">More Info</a>
            </div> 
                
            @endfor
        
    </div>
</body>
</html>