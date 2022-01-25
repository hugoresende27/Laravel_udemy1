<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 3</title>
</head>
<body>

    <marquee behavior="" direction="">
        <h1>
        <?php
            echo $username;
        ?>
        </h1>


      <h2>  {{ $username }} </h2>

      @if (1 != 1)
        <h4> deu certo</h4>
      @else
        <h4> deu Errado</h4>
      @endif
 
      @auth 
        <p>autenticado</p>
      @endauth

      @guest
        <p>guest</p>
      @endguest 

    </marquee>

    @if ($username == "hugo")
        <h3>Aprendendo Laravel</h3>
    @elseif ($username == "zecas")
        <h2>Bem vindo zecas</h2>
    @else 
        <h3>Bem vindo sr {{$username}}</h3>
    @endif

    @unless ($username == "hugo")
        <p>UNLESS USERNAME SEJA "hugo" acontece isto</p>
    @endunless

    @isset ($username)
        <h3>username isset true </h3>
    @endisset

    @isset ($args[1])
        <h3>args [1] setado </h3>
    @endisset

    @empty($args['a'])
        <h3>Está vazio  </h3>
    @endempty

    <table>
    @for($i= 0; $i< 10 ; $i++)
        <tr>
            <td>{{$i}}</td>
        </tr>
    @endfor

    @while($whilezada)
  {{--      {{dump ($whilezada)}} --}}
        @if($whilezada)
            {{$whilezada = false}}
        @endif

    @endwhile

    @foreach($chatters as $key => $chatter)
        <tr>
            <td>{{$key. " ~~ ".$chatter}}</td>
        </tr>
    @endforeach

    </table>
 
    
</body>
</html>

