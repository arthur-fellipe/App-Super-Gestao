@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <form action={{ route('site.login') }} method="post">
                @csrf
                <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                @if($errors->has('usuario'))
                    {{ $errors->first('usuario') }}
                @endif
                <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
                @if($errors->has('senha'))
                    {{ $errors->first('senha') }}
                @endif                
                <button type="submit" class="borda-preta">Acessar</button>
            </form>
            {{ isset($erro) && $erro != '' ? $erro : '' }}
        </div>
    </div>
@endsection