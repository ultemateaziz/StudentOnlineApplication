<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Application Forms</title>
</head>
<body>
<style>
         .container-list{
            display: flex;
            justify-content: center;
            text-align: left;
         }
         .container-list ul li{
            text-decoration: none;
            list-style: none;
         }
         .container-list ul li a{
            text-decoration: none;
            font-size: 18px;
            padding: 10px 10px;
         }
         .container-list ul li a img{
            vertical-align: middle;
         }
         .container-right{
            text-align: right;
         }
         .dashboard{
            text-decoration: none;
            font-size: 18px;
            color: #6a6af5;
         }
    </style>
       @if (Route::has('login'))
                <div class="container-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dashboard">டாஷ்போர்டு</a>
                    @else
                        <a href="{{ route('login') }}" class="dashboard">உள்நுழைய</a>
                    @endauth
                </div>
            @endif
    <div class="container-list">
 
        <ul>
            <li><a href="{{route('first.page')}}"><img src="./images/bullets.png" alt=""> முதலாம் ஆண்டு விண்ணப்பம்</a></li>
            <li><a href="{{route('second.page')}}"><img src="./images/bullets.png" alt=""> இரண்டாம் ஆண்டு விண்ணப்பம்</a></li>
            <li><a href="{{route('third.page')}}"><img src="./images/bullets.png" alt=""> மூன்றாம் ஆண்டு விண்ணப்பம்</a></li>
            <li><a href="{{route('four.page')}}"><img src="./images/bullets.png" alt=""> நான்காம் ஆண்டு விண்ணப்பம்</a></li>
            <li><a href="{{route('five.page')}}"><img src="./images/bullets.png" alt=""> ஐந்தாம் ஆண்டு விண்ணப்பம்</a></li>
        </ul>
    </div>
</body>
</html>