<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        {{-- {{$name="Hello, my name is Bob"}}
        <br>
        {{strlen($name)}}
        <br>
        {{substr($name,10,4)}}
        <br>
        {{strtolower($name)}}
        <br>
        {{strtoupper($name)}}
        <br>
        {{str_replace('b','p',$name)}} --}}

        {{-- variabel int:
        {{$int=-10}}
        <br>
        mutlak:
        {{abs($int)}}
        <br>
        pangkat:
        {{pow(2,4)}}
        <br>
        pembulatan:
        {{round(3.5)}}
        <br>
        akar:
        {{sqrt(144)}}
        <br>
        max min:
        {{min(10,15)}}
        <br>
        pembulatan ke atas:
        {{ceil(3.1)}}
        <br>
        pembulatan ke bawah:
        {{floor(4.9)}}
        <br> --}}

        {{-- @for ($i = 0; $i < count($users);$i++)
            <h1>{{$users[$i]}}</h1>
        @endfor --}}

        {{-- @foreach ( $users as $user )
            <h1>{{$user}}</h1>
        @endforeach --}}

        {{-- @forelse ( $users as $user )
            <h1>{{$user}}</h1>
        @empty
            <h1>no users!!</h1>
        @endforelse --}}

        {{-- @if (count($users)==5)
            <h1>Users ada 5</h1>
        @endif --}}
    </body>
</html>
